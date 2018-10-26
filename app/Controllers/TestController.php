<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/10
 * Time: 17:38
 */

namespace app\Controllers;


use App\Models\User;

class TestController
{
    public function index()
    {
        $a = '{"gmt_create":"2018-10-25 19:17:29","charset":"GBK","gmt_payment":"2018-10-25 19:17:45","notify_time":"2018-10-25 19:31:14","subject":"微信代运营","sign":"apINctKq3xrvEBaLHxdjA4fMpPVR4xR6HcxN1c3WQGzp8fpUceE5Rt3Vtf+PcxwdWxUuoBJ3ITsbHn0ZesBliPI9l921wHk4kVXSM2wm4SlPNJKop+DZ0Mfn4tJlgxBTNAx0k9KtGlQkz3FKuIhzjwUrBeb3AIEndV2mNy4tvMzcNwBYZh3zSz60Zq0sigfdaZl7n8nmUCjsK0kQyaw4soJb0GLRGryKYUdrQ1+0gZ/+ddkZeBn637/TM/iPflGxbSpQIQXUoI2L1erYR91I+X64p9lyQxwBlzw3F/KeZk2e/IfoiUtQhYpd6oO3d9UNJpcJaHIgABuY2sMbYwTY1Q==","buyer_id":"2088702399378211","invoice_amount":"0.01","version":"1.0","notify_id":"2018102500222191745078211017259787","fund_bill_list":"[{\"amount\":\"0.01\",\"fundChannel\":\"ALIPAYACCOUNT\"}]","notify_type":"trade_status_sync","out_trade_no":"2018102310248566","total_amount":"0.01","trade_status":"TRADE_SUCCESS","trade_no":"2018102522001478211004993717","auth_app_id":"2018102461806418","receipt_amount":"0.01","point_amount":"0.00","app_id":"2018102461806418","buyer_pay_amount":"0.01","sign_type":"RSA2","seller_id":"2088331210271802"}';

        //$a = '{"gmt_create":"2018-10-25 15:02:20","charset":"GBK","gmt_payment":"2018-10-25 15:02:23","notify_time":"2018-10-25 15:02:23","subject":"微信代运营","sign":"PcvQKBkv+fQHrYJzJCdgNLPciLZsDjfKA8vHqPHnTNLF9I0WuTPqaHBP7k1O5sY0vpZLmW98N1vc/B18SJcre1fw3Ef3z4mqzs0b3VrIZberLPqui4ILzBvekLP8Dv4s6iEuY4Clau3YT3uLUtxORe72YrRk3NTHy/dLrD7aiwZK25w5C27N7kG3XmgDOvNTkUF067YkEYBaDa8CUA/zw+3mdd+WlMj3fnQKAaV6PYZResRZbvcyDvIHzVeE7BvPISUt+Pi+m4uNFxTGbuDDom9C0UF8iEig3IYhjDvW/B1TMzG9J/eblzXH3SeoZ+Kk8NfpjNPsWhTtg3FIJ6HnuQ==","buyer_id":"2088702693397491","invoice_amount":"0.01","version":"1.0","notify_id":"2018102500222150223097491016872493","fund_bill_list":"[{\"amount\":\"0.01\",\"fundChannel\":\"ALIPAYACCOUNT\"}]","notify_type":"trade_status_sync","out_trade_no":"2018102310248549","total_amount":"0.01","trade_status":"TRADE_SUCCESS","trade_no":"2018102522001497491004806723","auth_app_id":"2018102461806418","receipt_amount":"0.01","point_amount":"0.00","app_id":"2018102461806418","buyer_pay_amount":"0.01","sign_type":"RSA2","seller_id":"2088331210271802"}';
        $re = \GuzzleHttp\json_decode($a,true);
        dd($re);
        $save_path = '/uploads/goods';
        dd(public_path($save_path));
    }
}