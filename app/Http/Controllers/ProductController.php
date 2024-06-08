<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\ProposedProduct;
use App\Models\ComparedProduct;
use App\Models\ProposedProductDetail;
use App\Models\ComparedProductDetail;
use App\Models\ComparisonCriteria;

class ProductController extends Controller
{
    /**
     * 自社商品登録画面の表示
     * 
     * @return view
     */
    public function showProposedProduct()
    {
        return view('main.proposed_product_register');
    }

    /**
     * 自社商品登録処理
     * 
     * 
     */
    public function storeProposedProduct(ProductRequest $request)
    {
        $product = $request->all();

        $user = session('user');

        if($user) {
            $product['company_id'] = $user->company_id;
        }

        \DB::beginTransaction();
        try {
            ProposedProduct::create($product);
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            abort(500);
        }

        \Session::flash('err_msg', '商品を登録しました');
        return redirect(route('menu'));
    }
        /**
     * 自社商品詳細画面の表示
     * 
     * @return view
     */
    public function showProposedProductDetail1()
    {
        $user = session('user');
        if($user) {
            $cId = $user->company_id;
        }

        $proposed_products = DB::select('select id, company_id, name from proposed_products where company_id = :cId', ['cId' => $cId]);
        return view('main.proposed_product_detail', ['proposed_products' => $proposed_products]);
    }
        /**
     * 自社商品詳細登録処理
     * 
     * @return view
     */
    public function showProposedProductDetail2(Request $request)
    {
        $user = session('user');
        // $proposed_product_detail = new ProposedProductDetail;
        // $comparison_criteria = new ComparisonCriteria;

        $proposed_id = isset($request->proposed_id) ? $request->proposed_id : "";
        $type = isset($request->type) ? $request->type : "";
        $int_value = isset($request->int_value) ? $request->int_value : "";
        $str_value = isset($request->str_value) ? $request->str_value : "";
        $remarks = isset($request->remarks) ? $request->remarks : "";
        $unit = isset($request->unit) ? $request->unit : "";
        $attribute = isset($request->attribute) ? $request->attribute : "";

        if($user) {
            $cId = $user->company_id;
        }
        if (isset($type) && ($int_value == "" && $str_value == "")) {
            $proposed_products = DB::select('select id, company_id, name from proposed_products where company_id = :cId', ['cId' => $cId]);

            return view('main.proposed_product_detail', ['proposed_id' => $proposed_id, 'type' => $type, 'attribute' => $attribute]);
        } elseif (isset($type) && $int_value != "") {
            // 数値型の登録処理
            \DB::beginTransaction();
            try {

                // 自社商品詳細テーブル
                $proposed_product_detail_id = DB::table('proposed_product_details')->insertGetId([
                    'proposed_id' => $proposed_id,
                    'type' => $type,
                    'int_value' => $int_value,
                    'unit' => $unit,
                    'remarks' => $remarks,
                ]);

                // 中間テーブル
                $comparison_criteria_id = DB::table('comparison_criteria')->insertGetId([
                    'company_id' => $cId,
                    'proposed_product_id' => $proposed_id,
                    'proposed_product_detail_id' => $proposed_product_detail_id,
                    'attribute' => $attribute,
                ]);

                // 他社商品詳細テーブル
                DB::table('compared_product_details')->insert([
                    'company_id' => $cId,
                    'comparison_criteria_id' => $comparison_criteria_id,
                    'type' => $type,
                    'int_value' => $int_value,
                    'unit' => $unit
                ]);

                \DB::commit();
            } catch(\Throwable $e) {
                \DB::rollback();
                dd($e->getMessage());
                abort(500);
            }

            return redirect(route('menu'));

        } elseif (isset($type) && $str_value != "") {
            // 文字列型の登録処理
            \DB::beginTransaction();
            try {

                // 自社商品詳細テーブル
                $proposed_product_detail_id = DB::table('proposed_product_details')->insertGetId([
                    'proposed_id' => $proposed_id,
                    'type' => $type,
                    'remarks' => $remarks,
                ]);

                // 中間テーブル
                $comparison_criteria_id = DB::table('comparison_criteria')->insertGetId([
                    'company_id' => $cId,
                    'proposed_product_id' => $proposed_id,
                    'proposed_product_detail_id' => $proposed_product_detail_id,
                    'attribute' => $attribute,
                ]);

                \DB::commit();
            } catch(\Throwable $e) {
                \DB::rollback();
                dd($e->getMessage());
                abort(500);
            }

            return redirect(route('menu'));
        }
        else {
            $proposed_products = DB::select('select id, company_id, name from proposed_products where company_id = :cId', ['cId' => $cId]);
            return view('main.proposed_product_edit', ['proposed_products' => $proposed_products]);
        }
    }

    /**
     * 自社商品詳細登録画面
     * 
     * @return view
     */
    public function showProposedProductDetail() {

        $detail_id = session('detail_id');
        $proposed_id = session('proposed_id');
        $type = session('type');

        return view('main.proposed_product_detail', ['detail_id' => $detail_id, 'proposed_id' => $proposed_id, 'type' => $type]);
    }

    /**
     * 自社商品詳細登録処理（？）
     */
    public function storeProposedProductDetail(Request $request) {
        $ProposedProductDetail = new ProposedProductDetail();

        $detail_id = $request->detail_id;
        // dd($detail_id);

        // dd($request->int_value);
        if($request->int_value) {
            $ProposedProductDetail->int_value = $request->int_value;
            $ProposedProductDetail->unit = $request->unit;
            $ProposedProductDetail->remarks = $request->remarks;
            \DB::beginTransaction();
            try {
                    DB::table('proposed_product_details')->where('id', '=', $detail_id)->update(['int_value' => $ProposedProductDetail->int_value, 'unit' => $ProposedProductDetail->unit, 'remarks' => $ProposedProductDetail->remarks]);

                \DB::commit();
            } catch(\Throwable $e) {
                \DB::rollback();
                dd($e->getMessage());
                abort(500);
            }

            return redirect(route('menu'));

        } elseif($request->str_value) {
            $ProposedProductDetail->str_value = $request->str_value;
            $ProposedProductDetail->unit = $request->unit;
            $ProposedProductDetail->remarks = $request->remarks;
            try {
                DB::table('proposed_product_details')->where('id', '=', $detail_id)->update(['str_value' => $ProposedProductDetail->str_value, 'unit' => $ProposedProductDetail->unit, 'remarks' => $ProposedProductDetail->remarks]);

                \DB::commit();
            } catch(\Throwable $e) {
                \DB::rollback();
                dd($e->getMessage());
                abort(500);
            }

            return redirect(route('menu'));
        }

    }


    /**
     * 他社商品登録画面
     * 
     * @return view
     */
    public function showComparedProduct()
    {
        $user = session('user');
        $cId = $user->company_id;

        $products = DB::select('select id, company_id, name from proposed_products where company_id = :cId', ['cId' => $cId]);

        return view('main.compared_product_register', ['products' => $products]);
    }

        /**
     * 他社商品登録処理
     * 
     * 
     */
    public function storeComparedProduct(ProductRequest $request)
    {
        $product = $request->all();

        $user = session('user');

        if($user) {
            $product['company_id'] = $user->company_id;
        }
        // dd($product);

        \DB::beginTransaction();
        try {
            ComparedProduct::create($product);
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            dd($e->getMessage());
            abort(500);
        }

        \Session::flash('err_msg', '商品を登録しました');
        return redirect(route('menu'));
    }

    /**
     * 他社商品詳細登録画面表示
     * 
     * 
     */
    public function showComparedProductDetail1()
    {
        $user = session('user');
        if($user) {
            $cId = $user->company_id;
        }
        $compared_products = DB::select('SELECT id , name FROM compared_products WHERE company_id = :cId', ['cId' => $cId]);

        return view('main.compared_product_detail', ['compared_products' => $compared_products]);
    }

    /**
     * 他社商品詳細登録処理
     * 
     * 
     */
    public function showComparedProductDetail2(Request $request)
    {
        $user = session('user');
        if($user) {
            $cId = $user->company_id;
        }
        $compared_id = $request->compared_id;

        // 自社商品詳細に紐づく&&他社商品詳細に紐づかないレコードを取得する
        $compared_products = DB::select(
            'SELECT 
                cp.id
                , cp.proposed_id
                , cp.name 
                , cc.attribute
                , cc.id as cc_id
                , ppd.type
                , ppd.unit
                , 1 as detail_flg
            FROM compared_products cp 
                JOIN proposed_products pp 
                ON cp.proposed_id = pp.id
                    JOIN comparison_criteria cc
                    ON pp.id = cc.proposed_product_id
                        JOIN proposed_product_details ppd
                        ON cc.proposed_product_detail_id = ppd.id
            WHERE 
                cc.compared_product_id IS NULL
                AND cp.id = :compared_id 
                AND cp.company_id = :cId'
            , ['compared_id' => $compared_id, 'cId' => $cId]
        );

        // 自社商品に紐づく機能数を取得する

        // dd($compared_products);
        return view('main.compared_product_detail', ['compared_products' => $compared_products]);
    }

    public function showComparedProductConfirm(Request $request)
    {
        $user = session('user');
        if($user) {
            $cId = $user->company_id;
        }
        $compared_id = $request->id;
        $int_value = $request->int_value ?? "";
        $str_value = $request->str_value ?? "";
        $mix_value = $request->mix_value;
        $mix_array = explode("-", $mix_value);
        $remarks = $request->remarks;
        $comparison_criteria_id = $mix_array[0];
        $type = $mix_array[1];
        $unit = $mix_array[2];
        $load_flg = $request->load_flg;

        if ($load_flg == 1){
            //自社商品詳細と比較する

        }elseif ($load_flg == 2){
            // 他社商品詳細を登録する
            \DB::beginTransaction();
            try {
                // 他社商品詳細テーブル
                if ($int_value != "") {
                    $compared_product_id = DB::table('compared_product_details')->insertGetId([
                        'compared_id' => $compared_id,
                        'company_id' => $cId,
                        'remarks' => $remarks,
                        'comparison_criteria_id' =>$comparison_criteria_id,
                        'type' => $type,
                        'int_value' => $int_value,
                        'unit' => $unit
                    ]);
                } elseif ($str_value != "") {
                    $compared_product_id = DB::table('compared_product_details')->insertGetId([
                        'compared_id' => $compared_id,
                        'company_id' => $cId,
                        'remarks' => $remarks,
                        'comparison_criteria_id' =>$comparison_criteria_id,
                        'type' => $type,
                        'str_value' => $str_value,
                        'unit' => $unit
                    ]);
                }
                DB::table('comparison_criteria')->where('id', $comparison_criteria_id)->update([
                    'compared_product_id' => $compared_product_id
                ]);

                \DB::commit();
            } catch(\Throwable $e) {
                \DB::rollback();
                dd($e->getMessage());
                abort(500);
            }
        }

    
        return view('main.menu');
    }

    public function showProposedProductContinues()
    {
        $user = session('user');
        if($user) {
            $cId = $user->company_id;
        }

        $proposed_products = DB::select(
            'SELECT
                id
                , name
            FROM
                proposed_products
            WHERE
                company_id = :cId'
            , ['cId' => $cId]
        );
        return view('main.proposed_product_continue', ['proposed_products' => $proposed_products]);
    }

    public function storeProposedProductContinues()
    {
        return redirect(route('menu'));
    }














    public function choice() 
    {
        $user = session('user');
        if($user) {
            $cId = $user->company_id;
        }
        $proposed_products = DB::select(
            'SELECT
                id
                , name
                , remarks
            FROM
                proposed_products
            WHERE
                company_id = :cId'
            ,['cId' => $cId]);

        $compared_products = DB::select(
            'SELECT
                id
                , proposed_id
                , name
                , remarks
            FROM
                compared_products
            WHERE
                company_id = :cId'
            ,['cId' => $cId]);

        return view('main.choice', ['proposed_products' => $proposed_products, 'compared_products' => $compared_products]);
    }

    public function compare(Request $request) 
    {

        // dd($request->all());
        // return view('main.compare');

        // $proposed_products = ProposedProduct::select('proposed_products.id as id', 'proposed_products.name as name', 'proposed_products.remarks as remarks', 'proposed_product_details.id as o_id', 'proposed_product_details.proposed_id as connection_id', 'proposed_product_details.behavior as behavior')
        //             ->where('proposed_products.id', $id)
        //             ->join('proposed_product_details', 'proposed_products.id', 'proposed_product_details.proposed_id')
        //             ->get();

        // // dd($proposed_products);

        // $details = DB::table('compared_products')
        //             ->join('compared_product_details', 'compared_products.id', '=', 'compared_product_details.id')
        //             ->get();

        // $num = $request->input('nhead');

        $data = array(3, 1, 3, 6, 2);

        return view('main.compare', ['data' => $data]);
        // return view('main.compare', ['proposed_products' => $proposed_products, 'details' => $details]);
    }
}