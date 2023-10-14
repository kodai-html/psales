{/* <script>
$.ajaxSetup({
    headers: { 'X-CSRF-TOKEN': $("[name='csrf-token']").attr("content") },
})
$('.addh').on('click', function(){
    id = $('select[name="addh"]').val();
    $.ajax({
        url: "{{ route('addRecord') }}",
        method: "POST",
        data: { id : addh },
        dataType: "json",
    }).done(function(res){
            console.log(res);
            $('ul').append('<li>'+ res + '</li>');
    }).faile(function(){
        alert('通信の失敗をしました');
    });
});
</script> */}