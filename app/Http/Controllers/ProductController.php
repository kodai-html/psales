<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Own;
use App\Models\Other;
use App\Models\OwnDetail;
use App\Models\OtherDetail;

class ProductController extends Controller
{
    /**
     * 自社商品登録画面の表示
     * 
     * @return view
     */
    public function showOwn()
    {
        return view('main.own_product_register');
    }

    /**
     * 自社商品登録処理
     * 
     * 
     */
    public function storeOwn(ProductRequest $request)
    {

        $product = $request->all();

        \DB::beginTransaction();
        try {
            Own::create($product);
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            abort(500);
        }

        \Session::flash('err_msg', '商品を登録しました');
        return redirect(route('menu'));
    }

    /**
     * 他社商品登録画面
     * 
     * @return view
     */
    public function showOther()
    {
        return view('main.other_product_register');
    }

        /**
     * 他社商品登録処理
     * 
     * 
     */
    public function storeOther(ProductRequest $request)
    {

        $product = $request->all();

        \DB::beginTransaction();
        try {
            Other::create($product);
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            dd($e);
            abort(500);
        }

        \Session::flash('err_msg', '商品を登録しました');
        return redirect(route('menu'));
    }

    /**
     * 自社商品編集画面の表示
     * 
     * @return view
     */
    public function showOwnEdit()
    {
        $own_products = DB::select('select id, name from owns');
        $own_details = DB::select('select id, owns_id, behavior, type, int_value, str_value, remarks from own_details');

        return view('main.own_product_edit', ['own_products' => $own_products, 'own_details' => $own_details]);
    }

    /**
     * 自社商品編集処理
     * 
     * 
     */
    public function storeOwnEdit(Request $request)
    {
        $ownDetail = new OwnDetail();
        
        $ownDetail->id  = $request->id;
        $ownDetail->owns_id  = $request->owns_id;
        $ownDetail->behavior  = $request->behavior;
        $ownDetail->type  = $request->type;
        $ownDetail->int_value  = $request->int_value;
        $ownDetail->str_value  = $request->str_value;
        $ownDetail->remarks  = $request->remarks;

        // dd($ownDetail->owns_id);
        \DB::beginTransaction();
        try {
            OwnDetail::upsert([
                'id'=>$ownDetail->id, 
                'owns_id'=>$ownDetail->owns_id, 
                'behavior'=>$ownDetail->behavior, 
                'type'=>$ownDetail->type, 
                'int_value'=>$ownDetail->int_value, 
                'str_value'=>$ownDetail->str_value, 
                'remarks'=>$ownDetail->remarks
            ]
            , [
                'id'
            ] 
            , [ 
                'owns_id',
                'behavior', 
                'type', 
                'int_value', 
                'str_value', 
                'remarks'
            ]);
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            abort(500);
        }

        \Session::flash('err_msg', '商品概要を登録しました');

        return $this->showOwnEdit();
    }

    /**
     * 他社商品編集画面の表示
     * 
     * @return view
     */
    public function showOtherEdit()
    {
        $other_products = DB::select('select id, name from others');
        $other_details = DB::select('select id, others_id, int_value, str_value, remarks from other_details');

        return view('main.other_product_edit', ['other_products' => $other_products, 'other_details' => $other_details]);
    }

    /**
     * 他社商品編集処理
     * 
     * 
     */
    public function storeOtherEdit(Request $request)
    {
        $other_Detail = new otherDetail();
        
        $other_Detail->id  = $request->id;
        $other_Detail->others_id  = $request->others_id;
        $other_Detail->int_value  = $request->int_value;
        $other_Detail->str_value  = $request->str_value;
        $other_Detail->remarks  = $request->remarks;

        // dd($other_Detail->other_s_id);
        \DB::beginTransaction();
        try {
            OtherDetail::upsert([
                'id'=>$other_Detail->id, 
                'others_id'=>$other_Detail->others_id, 
                'int_value'=>$other_Detail->int_value, 
                'str_value'=>$other_Detail->str_value, 
                'remarks'=>$other_Detail->remarks
            ]
            , [
                'id'
            ] 
            , [ 
                'others_id',
                'int_value', 
                'str_value', 
                'remarks'
            ]);
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            abort(500);
        }

        \Session::flash('err_msg', '商品概要を登録しました');

        return $this->showOtherEdit();
    }

    public function compare() 
    {
        $owns = DB::table('owns')
                    ->join('own_details', 'owns.id', '=', 'own_details.owns_id')
                    ->get();

        $details = DB::table('others')
                    ->join('other_details', 'others.id', '=', 'other_details.id')
                    ->get();

        return view('main.compare', ['owns' => $owns, 'details' => $details]);
    }

    public function addRecord()
    {
        $id = request()->get('id');

        dd($id);

        $records = OwnDetail::find($id);
        return response()->json(['name' => $records]);
    }
}
