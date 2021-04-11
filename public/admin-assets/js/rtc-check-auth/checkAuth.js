


function RtcAuthCheck() {

    let CheckAuth = $('meta[name="csrf-token"]').attr('data-auth-check');
    let DeviceWidth = window.innerWidth; // checking device width .......( real time )

    if (navigator.onLine){

        if (CheckAuth != 0 ){

            $.post(rtc_auth_check,
                {
                    _token: csrf_token,
                    DeviceWidth: DeviceWidth,
                    JsUserRole: JsUserRole

                },
                function(data){
                    if (data.code == 500)
                    {
                        console.log(data.message);
                        $('meta[name="csrf-token"]').attr('data-auth-check',0);
                        SnackAlert(data.message,'#fff','#e7515a');
                        setTimeout(function(){ window.location.href = logout_route; }, 5000);

                    }else {
                        // console.log(data);
                    }

                });
        }

    }else {
        SnackAlert('အင်တာနက်ချိတ်ဆက်မူ့ပြဿနာဖြစ်နေပါသည်','','');
    }


}


setInterval( RtcAuthCheck , 500);
// setInterval(console.log("Hello"), 500);

const  SnackAlert = (Sms,TxtColor='',Bgcolor='') =>
{
    $('.linear-activity').addClass("d-none");
    Snackbar.show({
        text: Sms,
        pos: 'bottom-right',
        actionTextColor: TxtColor,
        backgroundColor: Bgcolor
    });
}
