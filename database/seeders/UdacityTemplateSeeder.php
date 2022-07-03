<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UdacityTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $template = [
                'language' => 'en',
                'title' => 'Udacity offer',
                'description' => 'Time is running out on this special offer',
                'game_id' => 1,
                'attachment_type_id' => null,
                'is_phishing'=> 0,
                'reason'=>'trusted sender',
                'short_reason'=>'trusted sender',
                'sender' => 'security@udacity.com',
                'template'=> "<!DOCTYPE html>
<html>

<head>
    <meta content='text/html charset=utf-8' http-equiv='Content-Type'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta content='IE=edge' http-equiv='X-UA-Compatible'>
    <title>Udacity</title>
</head>

<body bgcolor='#fafbfc' style='margin: 0px; padding: 0px; min-height: 300px; font-family: sans-serif;' yahoo='fix'>
<div style='max-width: 100%;'>
    <table border='0' cellpadding='0' cellspacing='0' max-width='600px' style='margin:0 auto;' align='center'>
        <tr width='600px'>
            <td style='background-color:#fafbfc;' width='600px'>
                <center bgcolor='#fafbfc' width='600px'
                    style='background-color:#fafbfc;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;'>
                    <div style='margin:0 auto;' width='600px'>
                        <table border='0' cellpadding='0' cellspacing='0' width='600px'>
                            <tr width='600px'>
                                <td width='100%' align='center'>
                                    <table border='0' cellpadding='0' cellspacing='0' style='width:600px;'>
                                        <tr>
                                            <td align='center' style='padding-bottom:0px;'>
                                                <table border='0' cellpadding='0' cellspacing='0'
                                                    style='font-family:Helvetica, Arial, sans-serif; font-size:13px; line-height:18px; color:#00C0EA; text-align:center; width:152px;'>
                                                    <tr>
                                                        <td style='padding:20px 0 20px 0;'>
                                                            <a href='https://www.udacity.com/courses/all'
                                                                style='text-decoration:none;' target='_blank'
                                                                data-bsft-link-id='1'><img alt='Udacity' border='0'
                                                                    src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA5gAAAC0CAYAAADxToNtAAAAAXNSR0IArs4c6QAAAG5lWElmTU0AKgAAAAgAAwESAAMAAAABAAEAAAExAAIAAAARAAAAModpAAQAAAABAAAARAAAAABBZG9iZSBJbWFnZVJlYWR5AAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAADmKADAAQAAAABAAAAtAAAAAC4Mhn8AAABy2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS40LjAiPgogICA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPgogICAgICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgICAgICAgICB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iCiAgICAgICAgICAgIHhtbG5zOnRpZmY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vdGlmZi8xLjAvIj4KICAgICAgICAgPHhtcDpDcmVhdG9yVG9vbD5BZG9iZSBJbWFnZVJlYWR5PC94bXA6Q3JlYXRvclRvb2w+CiAgICAgICAgIDx0aWZmOk9yaWVudGF0aW9uPjE8L3RpZmY6T3JpZW50YXRpb24+CiAgICAgIDwvcmRmOkRlc2NyaXB0aW9uPgogICA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgopLs09AAA5uElEQVR4Ae2dz3LbRra4u0HqenajLDPlVOT1/SVRtnecCr2LM+NEfgJLTxDrCWQ9ge0nsPwEUuJM7F2YGme21iQza2sqrpnl5d2NRyT6dw4EKBJFohskQALghyobJPrf6a8hEKfP6dPGcEAAAhCAAAQgAAEIQAACEIAABCAAAQhAAAIQgAAEIAABCEAAAhCAAAQgAAEIQAACEIAABCAAAQhAAAIQgAAEIAABCEAAAhCAAAQgAAEIQAACEIAABCAAAQhAAAIQgAAEIAABCEAAAhCAAAQgAAEIQAACEIAABCAAAQhAAAIQgAAEIAABCEAAAhCAAAQgAAEIQAACEIAABCAAAQhAwE/A+rO0LMfhvzZsd/jQGrtljNuPh8NH5u6NQct6WevudL55sx1bc68j/Id33uvXWliEgwAEIAABCEAAAhCAAASCCayOgnn4ej3qdu8bY/cu0bHmxLpod3Tnd0eXrvOldALdZ7/0YmMfSsWbWeXOuCM37O6au++eZNc4QwACEIAABCAAAQhAAALNJLASCqZazFxk9owzG9OGyRnTd8PODorONEJzXL9kNZ5WD9bkaWS4DgEIQAACEIAABCAAgaYQaLWCqRazkVgspZO98AFB0Qln5cmpVuPO2p6xRizHAYdak2OzP/ri+kFAbrJAAAIQgAAEIAABCEAAAjUj0E4FUyxm0dpILZbbM/EWRSdybof1gTPRSwpF3765L/zVHXm9aC2JNTkyu+YP14+LliU/BCAAAQhAAAIQgAAEILA8Au1SMH9dZ/mVIC2s2IwPA+sDx4n4v3ee/XPL2fhhnjuyv5Y0hzOP4tHpPkGYgomREQIQgAAEIAABCEAAAksl0BoFM2Sd5YykB/Gd6+/MWHZ1iv3pzaa4t0p03iLuyEF44B+EiUwQgAAEIAABCEAAAhBYPoHu8kWYT4JsnaW4VfbEalbFMbcltAqhalOnWo3X1h6aeEZ3ZH9H4O9nRA4IQAACEIAABCAAAQjUgkBzFcx0nWUs6yxbY4atxS0RKMRFd2Q3vztyYKtkgwAEIAABCEAAAhCAAARqTKB5Cua5YjP6SiyWWLeWcHNV6I68hN7QJAQgAAEIQAACEIAABCBQFoFGKZgoNmUN+2z1LMAdeTbBKAUBCEAAAhCAAAQgAAEI1IJAIxRMFJsl3yvijmy7w4exsVu4Iy95LGgeAhCAAAQgAAEIQAACNSZQbwWzonWWus9iBdFOazzMM4r2qzvynjGoljNSpBgEIAABCEAAAhCAAARWhkBU155Gz355EHVHr2Sd5XaJMg6sMzvuzvVbJdbZyqrUHTnqrr0WxVKUy/IO3Vs0HnZulFcjNUEAAhCAAAQgAAEIQAACdSFQOwtm59k/t5yNH4piuVEuJLcfD4ePzN0bg3LrbVdt6o4cW/vElc7fHEfG7Q7vvNdPiD170y5w9AYCEIAABCAAAQhAAAIQMPVRMP/0ZtPG5qEzcan7Wao7rBt2dszdd08Y7xwCyTrL0ZO4/P1E1Wq8O/ri+oHUzQEBCEAAAhCAAAQgAAEItJjA8hVMXee3tvbQxKW6wuqSwZPIuZ1zi1mLB3Gurin/ztqesaP7c9UzsTBW44lYuAgBCEAAAhCAAAQgAIGWEliqgqnrLEUTLHs/S3GBdY/jP773AItZ/l17zt+Uu5+orrN0w+4uVuN8/qRCAAIQgAAEIAABCECgbQSWomBWts7SmoP49FQUG9ZZ5t2olfE3Y+ss84QgDQIQgAAEIAABCEAAAhBoHYHFKpgVrrPsGLc//GMaQKZ1w1ROh37dT7Tcda4iHessyxkiaoEABCAAAQhAAAIQgECjCSxGwaxqnWWq2MQSQGbY6GGoWPiK9hNNpHbmUTw63cdqXPEYUj0EIAABCEAAAhCAAAQaQKByBfN8nZ8rd52frLNk2xHfDaaKfbcrwXtGZa9zlV1kiM7rw086BCAAAQhAAAIQgAAEVo1AZQpmVev8UGzCbtHON2+2XWT2St9PlOi8YQNALghAAAIQgAAEIAABCKwggfIVzIrWWbLtSNjdqessY2NlP1GzqWbGEo+BjMF+/Mfrj4jOWyJVqoIABCAAAQhAAAIQgECLCJSnYGb7Kcam7P0U2XYk8Iazz345FOVyKzB7eDbWWYazIicEIAABCEAAAhCAAARWmEApCmb07Zv7Yi3bE47rpbJk25FCOG3JyiXuyIXwkxkCEIAABCAAAQhAAAIrT2AuBTNxx7T2Sdnr/FSxYduRJd6brLNcInyahgAEIAABCEAAAhCAQHMJzKZgyrYXtjt6ImvxemWv87PO7LLtyNJuKNyRl4aehiEAAQhAAAIQgAAEINB8AsUUzGydpR3dL7/rbDtSPtMCNeKOXAAWWSEAAQhAAAIQgAAEIACBSQSCFcyq1lmyzm/SsCzuWsI/MrvmD9ePF9cqLUEAAhCAAAQgAAEIQAACbSQQpGCKcvm67HWWbDuy5NtJ1llaF+3Gd353tGRJaB4CEIAABCAAAQhAAAIQaAmBIAWzZOWSdX41uHlkP8sbNRADESAAAQhAAAIQgAAEIACBFhEIUzDL6jDr/MoiST0QgAAEIAABCEAAAhCAAARqR2AhCibbjtRu3BEIAhCAAAQgAAEIQAACEIBA6QSqVjAHbDtS+phRIQQgAAEIQAACEIAABCAAgVoSiKqTSrcdOb0x+uL6QXVtUDMEIAABCEAAAhCAAAQgAAEI1IVA6RZMth2py9AiBwQgAAEIQAACEIAABCAAgcUSKF/BvHP91mK7QGsQgAAEIAABCEAAAhCAAAQgUAcCFbrI1qF7yAABCEAAAhCAAAQgAAEIQAACiyKAgrko0rQDAQhAAAIQgAAEIAABCECg5QRKd5FtOS+6BwEIQAACEIAABAoT+O//+XyzY13PReZ948ymNWZd4lZseity5sRY+efsibXmH7GJ+93ub46P+0cDb1kyQAACEFgCARTMJUCnSQhUTeCDm7flvWX68fPL5/Ju056D/i5sLPtJS9Yc21hedK075kV3YewnNiT3/qEkbE1MzC5at/Pzn18cZF85L4bAZu+zjfjUbjlrPpUWe8Y4VSjlpP+dn86+5P1vzYYkbxjZ902LWmP3RsO35oPf3z6Rb30Tua87nWt9FE6BI0dbfw98/TrrfXv/r8t7i4zD90K5l0u6Bc/ceX9bUDBz7xASIQABCEDgAoFe8tmZnrw064uu0RfdD2/ePpbvfUn74ec/Pz9K8vBf5QRUgRkNPcqlSGGd/UpOB5ULRANms7e1Phr9e0usjfdkbHryJ1LdkSieblu0zu1E4bx5+0jae8rfYHXIqRkCna7bGQ3tKyGxPpWGsw/l+SyTPi9OpuapccIHn9yWZ5j3t6WfN3HJGswaDzCiQQACEGgCAbGqbMqP0X35d6iz7DrzmfxANUH4BssYD6PtEPF1fP7fzc96IXnJMxsBVSw/vPn5A1H0Xoty+URq6c1W01yl9KXwUCybr1UWlWmu2igMAQhcIaBKozgT7F9JuHxhXZRQfQ407kieG874ZB+oop3XORTMPDqkQQACEIDALAR40Z2FWsEyzrl7oUWsi4LzhtZJPtHcLyiW4sC6J0yWr9SJZVNlUWUXRZO7FALlE/jpx+ePpNa+p+ae/v158tQuWZ4buuwi9zmmCrbPOouCWbuhRSAIQAACLSHAi25lA5lYiM/W5oW1Yd02Fq0wVKG5PvjkM3VNfV0bxfKq4LLm81dF82oyVyAAgVkJpBa8QV55/fvT4F55eeqU9uHvb98XeXoemfqpgp2bDQUzFw+JEIAABCBQAoHzF119KS+hPqpwprBFMj59C/sS7hxd+5oE+jhzhc2d6S+huTKqSP7+ZK30qya97JbRceqAQFUEAl1lTSdyT5owuafPNYmloF4YeYfXNTYrjIKZkeAMAQhAAAJVE1jX9Wn6cq4/ZlU31tb6U3ZbRfvnjNFgPxxzEFDLcRrgozdHNVq0LwF5HkmgrH053xVLx61J/zQ9yaP5dbuSOQ4Z/80ocq+a6LY3R7cpCoHKCIS4yurf3Wj01qe4VSZjaMXx0JbiGpu1RxTZjARnCEAAAi0hMG84d7Vy2Ci+ZJmJTNRz1v1WXnI3BZP+u5ReEF1PX9LlZV22zyDqbEF25iy4j7y2FD3EpVaD/fzt5Yt+0aLkl+0vPrn9UO7/+7OwkGCyxxLP9+tRbI7+/pfv5HPw0b+YUy0h8rLaM7H9UjY60Si1GxfTQz6r255M8nzU6V7bYWuTEGL1yDPvc71oL+QeyX3ILFqeovIvKn9YVFlzX569X9f12auTTvJc2PQwC3KNzepAwcxIcIYABCAAgYTAlBfg/kU8akUbjWSthtMX3WTNxvrF9IDPYs2UiJef3H4kSuZuQH6ypASS4D6iscxypMF++rOUXdUyiVI3fPtE7tetggwGogAedDrusS8gRmi9qUJ4JPn1n9HJoMiKZdo6lW1drwUeW/Hw7Yb07RZKZiAxskFgAgH925a1i/viXvpwQvL5JdkuSl1lP67b35s+Q3TS6VzQyR+CXWOz4rjIZiQ4QwACEIBAMAH9UdU9sGQW+678e0decDVkeT+4giyjWIQ++P3nT7KvnPMJqIvmLFar81oJ9nOOIuSDKpeiiH0veVWBCz0G6tYqFsIbOnlSlnI5qXGdDPr5x+92tK3kb7CAG62YpzaM+XcRpXSSCFyDwMoTSF1lj3JBiLeBBAWr3W+drhHNlVsSQ6LGjteBgjlOhO8QgAAEIFCYQKps3hJ3oRti1TwoVIEoPSiZgcRmCO4zXjPBfsaJTP6eKZeiiG1OznH1aqZY/vTyuweLtFRoW8nf4I/PwxVN6ypVfq/S4QoE2ktAXc6ldwNPD7eSSUJPpkUlq9t/wPOtkGtsJjsKZkaCMwQgAAEIzE0gsWwmFhVRNItYNFEyveyDgvucKfe5LznyQvGVtzEyyFrXt98HvHwlpKyssYxj+/GiFctJw6SKZmft2seq7E5KT68dab6cdJIgAIECBJIJJWtUycw/nBFX2eUHudP1+AFrygu7xmadR8HMSHCGAAQgAIHSCCSK5svnt8S1RtdX5io8542qkqmBVDgmEhiNrFcxdDZ+KorF44kVZBfTYD/ZV85XCahFPVS5VIv9Ty+ffzxl7fLVyhdwRV92VdlVpVeV30tNihttam25dJkvEIDAfATSoHVHnlrWJcjdE0+eSpPVO0PXhPoamcU1NqsTBTMjwRkCEIAABEonoGtTxG326kvutJZ0TSZ7ZU6m48z25IT0qigOGqUw6sYHufkkMQ3248u2kunJZuMy2RHUeVl7rGsgg/IuIZMqvar8XrRmxs7eXaT77hK6TZMQWBqBQFfZXvKcWZKUo9P/PAxYyz+Ta2zWJRTMjARnCEAAAhCohIBaM6PutVtSuW9m96x9Zx/WwYWoEhgzVpoq3et5xcVSlVgu06Ay+axFgYLxVZpJREVPNMjzUqpcNsTNVK2ZGgRIPQrqZGk9Z8kHCLSEQKirrEad1efNort9FijOO4E2s2ts1h8UzIwEZwhAAAIQqIyA/uhqxNnAAEBLdyGqDMSsFTt7z1c0Wrt2cJ7Hmqfnn6d8ONtPc0riCl5Wt7HIusOgrjdIucz6o8pwGu0yu8QZAhCogECgq6wJieBapnj6jJN1l5W6xmbyomBmJDhDAAIQgEDlBFJ3wnzr2pkUS3UhqhxEgQZSS2Mvt4isA7zo9pi84Hi2rEj208ytdLUSR6O3ewFuY+pf3BjL5WqNIL2FQH0IhLjKOolQvci4A+k2KbmeMEJwLtfYbARQMDMSnCEAAQhAYCEE9IdX3DmPfY2JC9FeMuPqy9jy9NDgPuMYrLX5VkwJ9pO4S40XXMHviauarP/1dV3XMjbFLdbXF9IhAIHqCIS6ymok1ySia3WiJDWnaz63PM3M7Rqb1Y+CmZHgDAEIQAACCyGgP7xR192VxgaeBmWT+/94X/o9dTQ/2RPcR5V1De4z3tGQYD/ycuN1vR2vt43fo8iFRC/uJ2sZ2wiAPkEAAqUTCHWV1YiuVU6mqheMTtj6OjhP1NjxulEwx4nwHQIQgAAEKieQBKIJ2DPMGbfSVsyQ4D7OuonbkiSMz/bFzBvPrVUP9pNaD3p5kCRNZvav6aQIBwQgAIFgAiGusuqan0R2Da61WMZ0W5R1T6lSXGOzNlAwMxKcIQABCEBgoQTS2d2+r9GVtmL6g/sMOp3fHE1jqPtiTkvLrq96sB9xe/XO7Mu6y92La1wzdpwhAAEI5BEIdpU92wd6K6+uWdI+vPn5AynX85QtzTU2awcFMyPBGQIQgAAEFk5A9sjc8TUqVsyvfHnamB4Y3OcoT/FJXGcJ9jP19gi0XvZZdzkVIQkQgICHQKirrEZ4LdNVNtl2SbyAPOLJ/JnZT7e38mUNTkfBDEZFRghAAAIQKJtAoBvneuoqWnbzta5vdBp5Xwxid7b3ZV5HZI3mRBfa8zIrHOxHrJfeyQuZ4Ng/Z8UHCEAAAjMQCHKVNUa26HobtlVSgAyB26CU6hqbiYWCmZHgDAEIQAACSyHQWYv9L/DOfrkU4ZbUaDKLbV2uu5Qojsd//8t3xz4RL+2POS3zCgb7SS3EuYwFV39SAKVpGLkOAQhAYBKBYFdZcWdNI75Oqib4mrrGOtkGxVOgdNfYrD0UzIwEZwhAAAIQWAqB1DXnyNO4BKORTaJX5BiN/q2KT25/pwX3GUeUvNgQ7Gcci4lPrTLOPbBe5uIhEQIQKEAgcZW15pGviEZ8TbZO8mWckq6u/xogb0ry+eUqXGOzylEwMxKcIQABCEBgeQSseeprPFW6fNlakS5h632um4Mi6wJDgv2E7LfZCrhZJ6xnixZZu4r1MoPFGQIQKINAp3NtX9ZannjqWg90b71SjU7E6rYnVxKuXqjENTZrBgUzI8EZAhCAAASWRiANgjDIFSCOPs1Nb0niWWAGj2uTNQdFuquKkrrU5pbx7LeZW7Zhicm+cB73MeGVv3a1YX1GXAhAYPkE1KNEvE92fJKoe2saAdaX9VL6aPR2T7c9uXTx6pfKXGOzplAwMxKcIQABCEBguQScPcoXwPXy09uRGlnjs16aTmfy3pd5BAJcalcmmNJoZLz3UrTmPPdjHm3SIAABCEwmkHhGhLjKiptrGul6ckVjVz/45PaWWEfvj12+8lWCmz0uO2rseCMomONE+A4BCEAAAsshELmvcxuWWdk0MEtutiYnhgT3kf71Z3k5SPfLHOTy8e+7mVu8MYkea7hae2dh3Jj+IygEILBUAoGusrKFiA3auiT57ZBtTnyd0mfbTy+/e+DLN286Cua8BCkPAQhAAAKlEJAf3L6vIlknuOnL0+T0kOA+8sbxdJY+psF+fFa5XtuV+DN2+dZwCbLRn4UxZSAAAQiEEAh1lVV318Tt1VOpbG+iyuW6J5sZxXbHl6eMdBTMMihSBwQgAAEIzE3gTAHKD34gs7mtVjC9wX0kOESR4D7jgxKyb+ZKBPvxr1H6YZwd3yEAAQiUSSDUVVbdXhP31ymNp/tEb01JPr8srrH7IVtbnReY4wMK5hzwKAoBCEAAAiUTsPmBaCT0+kclt1ib6kKC+1hrZ7JeZp1MXy762feJ55YH+wlZ0xRiTZ/IjosQgAAEChAIdZUVJXOiq2ziceLsQ1+TdkGusZkcKJgZCc4QgAAEILB0AjLD+lePEF4XIE/52iaHBPeJuvHB3B3wu9i2OtiP9VsvB4k1fW7QVAABCEAgn0Cwq6y4v6ZusJcqHA2TLUm8v4uLco3NhEPBzEhwhgAEIACBpROQ/RpPcoVwZiM3vaGJgcF9jsoIPJO62A5yUbU42I91ke8eOs5lQyIEIACBEgkEu8oas/Xh72/fz5pOP/ey79POi3SNzWRAwcxIcIYABCAAgaUTcL4NqP3Wp6X3YRYB4tO321IufxbamrncYy/J5d9Hs7XBfmS7lt9eYjH+xdmT8Ut8hwAEIFAlgVBXWQlAtqduscmSCvnsk2nRrrGZPCiYGQnOEIAABCAAgSURkE218/e+TIL7PD8qS7yQfTRbG+zHmc08juJC+4+8dNIgAAEIlE2giKtsPLSHncjVKmrsOA8UzHEifIcABCAAgaURSFyFltb6chpOgs54LLPzBvcZ71nqatsfv37puwT7SVx3L13kCwQgAAEIVEEg1FVWJiQ39Z9PhmW4xmYyoWBmJDhDAAIQgEAjCKhrUCMEDRRS1gTe82WNuv/1yJencHpAsJ90X87CVVMAAhCAAASKEwh1lfXVvCzX2EwuFMyMBGcIQAACEGgEARvF640QNEDINLjPdm5WZw+qiGqaBPvxrHn17suZKziJEIAABCBQhEABV9ncahcdNXZcGBTMcSKTvh++bs3LzKTuLfpa99kvvUW3SXsQgAAE6kggDe6TK5pE1n2am2GORJ/rrbphtc1iPAcuikIAAhConIC6yqp766wNLdM1NpMZBTMjkXPudrutcsfK6SpJEIAABGpPwMXRoPZCBgooCpw3uE+V61JD9tUM2Z8zsLtkgwAEIACBAAI/vfzugbq5BmS9lEXLaNlLF5fwBQVzCdBpEgIQgAAEZifw9798V/hHd/bWqisZFNzHmMfVSSBvIv0XJ1L/UW4b1m0R7CeXEIkQgAAESicwi5vrLGVKF1wqRMGsgip1QgACEIDATAQSpWumks0rFBTcZ+3aQZU9U8VR3Kn+6mljvVXBfjz7XMperO97eJAMAQhAoHICOplaxFW2Dq6xGZRu9oEzBBZFwJnOujHxopqjHQhAAAK1I6CK3Wj4djtXsJKD+2ibw+G/NyMT9ZxxHxnZD1Jk2MiVIU1Mg/0chOStex7d51Jck6cf1m1MTyQFAhCAwOIIqLvrhzdvfynPrM28VuviGpvJuLIKpgyULKA1vQxE3tk5u5GXTloxAs6M5I9E6Icdx2HZyAUBCLSBgLz8b4jiM/3wRD2dXrBeKfHwP/d9EsVuPvdYtQZHzm46az7NlEmZ4ZaPKeDgx7DREkmwn1a4Jzs38PwE5b7I+caNdAhAAAJlElC31yhyr/LqrItrbCbjyiqYGYCQs2M2MwRTeB5nf+v5cT+vS15qBudf+AABCLSegLiNbpwrQJN6a83JpMtNu+acu5f3HBTd77iIMneuTBr7kbXufBNuUS7Pjuw8B6g02M/OHFXUomhsnbqd5cmyrtbeKraGyWuUNAhAAAKTCOhvwQc3b09KOr9W5PfivFCFH1ZWwbROIjPZQAumMR9VOAYrV7W88Gzm/rRfICLWjJM8Y8aFrHyEAARaQCBx3czrh2f9XF7RuqR98MntLTEJbuTJIxObU4P76LYhUSfeNHH06VVlMlc9z2vSn3YW7Ge36YpXt/ubY3ENzu3vaPS2JxmOcjORCAEIQAACEwmsrIJprPu/UDdNmemUGXWOsgiIchnufuTcP8pql3raSSBdy9bOzq1ir2RdYJ5xSdfPNR6LM/c8fRh0Or9JlJtzZVIsk6KU6rOzlzisqmlSZkoX/Nu0nu7b+cgjf62TVUEWa8BAhFzPEfRTSTvKSScJAhCAAASmEIimXG/9Zel4v0AnN83h67wfogJVrXjWP73ZFALBLAuO04rDDe/+Zu+zjfDc9c6pQUvqLSHShRLQyQJRLjfy8otl7zgvve5p6d/elk9OsbAdihLkknU3zj4RTfK+lOn5ylWdLgpt/r6dVQtQXv39vKpEd+/lpZMGAQhAAALTCcj7+2oew+Gw0EtKp3utt5qkyu11VPBHezjsnpQrAbUpgeEw/yUeShBYBoHULTG36U6n2QpmPIy2czt4lrgup15AvsVnkQmANmwlIwrkD3nwRJHebNNEXF5fSYMABCBQNoGVVTDN3RsaRe4kFKhzsbrLcMxJQAJbhHPU8bn77smcTVIcAhBoCoHYfpkrqkSQPe6/OMnNU/PEJLhP3WQ8i8x7pHuoidPtLRFvkCdiyP6deeXrkDZytu+TIz61W748pEMAAhCAwFUCq6tgCgv5oQ+3YkaGH5qr90/hK/IC0wstVGh8QislX0JAty5oCwrd068tfVn5fkgQmXwGfqUgv/xyU5PgPh4X4MolHFMmxTvnnZ9/fH7j55fP7+p+a397+aJvnD3KlcO67cSdOTdTvROTiItnLKYLar1rZaeXJQUCEIDAChNY3SA/MujW2h9kXYvnhSa9OzTin64f/MP14xW+X+bqeufZP7eciddDK9HxETcljtkI9KVYb1pRF5n3p6U17bpz0hebK3U/N5XEWhBII6vmPx+iONetsRYdyRPCH9wnr/QsaQMppFty/BCbuK/RU0MiwOr+m7IlyXZeg20I9mMiCeJztrZ1Ylfl96c9e39O7CEXIQABCFRDYKUVzPi0cxR1Rw9D0UYjcy+WH+vQ/OS7TMDZ+MsiIQ91fC7XwLcCBPTFcurRrgAWrje1o2cJuSw8ZUleFAF1j5UbM+/IIqvm5alrmq7nGw0DJzRn64Te54kyqYGQdK3qrO7Eat378ObtY1WwpokiaRrs59G09CZcj0f2qQRRup8na1v2/szrI2kQgAAEyiaw0i6yyfq+AuswxUqyXfYArEx9GoXXFeDH+su5bg2xWPw1rwJ9cWxDAIukDx6XQ9FZmm31yhvIlqSdjaPb9nTnKMT65qljacmBwX2KyNeX36RH8u9up+vUxfUd+XdL3Vx//vNzYfXipEhl43nz9uFM8rYg2E+Ym6y6A7cn6vb4OPMdAhCAQBUEVtqCmQCNxUXGJuHfQ/iud755sz364vpBSGby/EogWlvbLmK9NDouHDMTUHc4UTL38ipIA1g02wKhQTjy3WNN3PBtLfLGsC1po9Noz2e9lPSvm9zfJLiP517N6Z8qk8cSOeCv8Sg6ThSjnMxlJKm1WLZKUQ+f9Wn1pcF++tPSm3BdhuSxTLjlejIl96cxO03oDzJCAAIQqAOB1bZgygjEHfO0yEDELPovgutiXnWnCj6KjktwxSuSMQnU4etrC+5leTH03VeDIBY+VqRXRiDQejn4+c8vDioTouKKP/jks21REDdCmhGF51iC7ByIQr0Tx/ZjsUpatUyKVXJXGSxCuVQ5E2vxCgT7idauHUh3B9rnqYcENWrD1ixT+0cCBCAAgZIJrLyCmQTtKeAmKz/+ve6zX3olj0Orq1Orr1gvN4I7qeNBMKVgXDkZj3LS1KC82eSXpkR2/0t7P48BacsnMBraXOuRSijW+MfLl3QOCZy9l1taopnq9iCqTP708vnHP//43c4ilclpsmmwn2lp2fU02E/2tXFnVaRD7q/I+O/TxnUegSEAAQhURAAFU8E697QI35HH9bBIXauQVyKW7hXqZ8HxKFT3KmUOcCn0udHWGVeQ7LaYh0Kd+9tG2ZLIscYf+Cbq/tejpvY/Xb/Xy5NfImY/raOlXa2lMql6nCd7gBdBXvFapKX3V64VUyfkPrz5+YNaCIwQEIAABGpOAAVTBigedg+KjJP84GLFDARW2Ho5w3gEirJy2dKIm7kvTQKl10QrZqqY9DyDKm6Vz488eUheEoFkH0Vnnvial4mE/SYH9xmNrM+N20Td+MDHYVnpIcF+0r/HZYk4d7uhVkyxMu/99/98vjl3g1QAAQhAoOUEylcwda/Iph133z0RH6yDImLH1npfjIrU18q8EjnW2fzgCVf6reOg48ExN4GgNVTSinXNupcLKCZe9765IVPBzATi4dvvpfC6p4JBk62XSd/80bPnjvjqYThXctBE1eL395yrT5MKJ/eZuCpPSrt4LbLuMHkGXbzIZwhAAAIQuESgdAWzGzvfC8MlAeryJSrqlilrCqNnvzyoi/x1lCPqrO2JXIXuh8LjUMeO10imzlq87xVH1jGKBcK7Ds5bz4IySGRLndzx3leNV0wWxHMZzXzw+8+fuJw9FjOZZIuZRlsvk+A+vnu15m7cgRNVW03fyiPpZ2R2s3tv6lmelzo50mQlU62wTZZ/6tiQAAEI1IZA6QpmbXpWUJDhnff68sLTL1ZMXJ8O/7VRrExFuWtmOU4CIYVv/5JAUf46DhURWslqk73wNCKl73DmfhPc3D78/e370pUtX3ea7lbp61+T01W5FLP5dkAf+j/9+PxRQL76ZgkI7tMEN+6gYD/DKGRM6ztWIlk6Fkc+IXVyZHT6n8ZMyl3sjy6JiCL3fdOV5It94jMEIFA/AiiYF8akY5zf2nMhv3xcj7qjw8uXlvOtVpZjcY2dxYV4Bv7Lgd2wVlMr5sArtqyHq/P6IrUGBbpcN9+t0jtYzcxQQLkcdLpup5m9PJM6NLhPE/qYbo3Sz5M12eczL0ND0jrdazsSYvvEK65Mkuj93CRLoD5DZfLte+nbepOVZO/YkAECEFg6ARTMC0MwmxXTbOIqewGifIzW1h7KD/TG5av537Be5vOZJ1WtmPJSEbIecV1ntuuoZCauhqFrRa3bTdzd5oFG2VIJ6Ev4hzdvvwq0XOrCYBnDFyelCrHgypoe3OcKLuuJtn7mau/1LrhSb80u6LMjdvZukFiiZDbBEqh/f8nkzvgzVORPvUKCuksmCEAAAqEEwhTMAvtEhjZc13yypYZ/DcYV4e1e59k/l/rD6pzduCLWtAsVjmcaNXZ7WtPTrrthp9HWimn9qsv1n15+98B6thtIZa2dkllIuTTmSPcPrAt35DBGXa9l3exrtZgE8bDmUSvGsOHBfcbHKh2TfE+IFgT70X4nFlsbZkHX+3p0+vZVHSfmtC8qVxJQa4pbunqFNGF5hPaFAwIQaA6BIAXThbiLpH0upOjUkdMfrh+L9e1RUdGciZ+YJa6DlFDyG6EyFxnP0Do1n667lB+rJ0XKJHmVN5FjC2MrWiDqOp2Vz39BPKtUlcxXdZjZToIPjc+6T+u4PKcS97Zp6VxfKAF1Ef3g5u1DeZ7qMoL1oMZlvbCsg5thki+o9oVlSiZFfH2ueXCfibD80dYbH+wn67cq1LqWO/ueexbrbV2emZmcidVSgrepXN7JnZovj8j6xBkCEGgOgSAF0xgX8lKa9LqIolNXTPHoVH9Ugvuc9mM9is33RtYfLqVf1r4f2q6twoIpynVsbPH1qCJLyjtUfPLNSCBxObQm2FKczGyLgrCM6JA66564VErwocDuJm5tuMYG0qowW6JYytq00dC+lma2gptS5fLH74Lvz+B6l5BRtv75KrdZmQxpQnCf8T50Ou7x+LXx73ELgv1kfVLPDxMSJC0tkD4zl77MQCc41GtAJndCn59ZlzlDAAIQKIVAkIJpjflrcGsFFJ3gOhed8e6NgTXRLC86EvRnbSlKplglN4IxOfeP4LwhGUW5TJRr34z9hLqsi3aN8J6QxKUKCCQvtYGuX2nz4t5oX3148/MHiwhmkSknQbPuF/mI4pwGIrl4lc8LJKBudrrOK1Esp7jjTRWnRcqlTo74LEbW2qdTWdQ4IV0X288TsS3BfrI+JpMeBZRMKadRWl+dBQD6bCOrp+rzmcXyMwk8dFsUy2Rv4/XANgdxbG/x/AykRTYIQCCIQJCCaawNVwBc4DqbIPGWl2l053dHzrijGSTYXIaSaeVHLVRWazrHoXm9+eZQLo24WylnbxtkKJVAspaqmJIpEQfdns6IV6VoZorlTMqJ9KWJ1qBSB3UJlaUueIlSKa6w/5u4whZVLFVuXXPZEsuldieyJt96qXm68YHmbeQRFOzns+1G9m2K0Hp/BrvLZnXI34I+z1TR1K1Bsstln3VCQ5cSnFksRbEUd93QNuS94ViiNX+MchlKjHwQgEAogW5Ixsi5Y3F/DMmqeTZDM9Y9nxsOd+za2qa8OG0UlDVRMuM/vdkxuqaz6kPXfsbhjciPXjkyzadcnsSnp41faxVOvV45VckUNyrxfk9mukOFyxTNPVEojiTS59edzm+OZnVLVaUyPrVb8mi5NxrKc8OK3afYMdBoo2nwkWIlyR1EQF9ebRSva2Zxrd8Qj4MNmWz4SJ6Jm/JCu5FUUnzckmLyn4yfadXkgCrdwmUr6+CUs/zNvDiZklb7y8mz4+bthyJocl9MFPhs/8+DiWkNvajusvLMPJFnZn7fx/sniqYop2pZPDGRORIL79d/e/miP56tyHdVWMUK/qX87svzU+IvFH50SmtilY3W/ouI20XAkxcCEAgmEKw1Rs/eBD/CIuNu6ZYfwVLUOeOZEvVqRhEHcWRuVa1kRt++uS8/MPqjF3IM4jvX3wnJmJdHo+YmgY3yXjKmV7AQLtObJyUjkAQjKfrClBVOzzoLLsG9jkUB+Uds4r5ednE00FlxfeEeDv+9qdfkhWhd1qZtZgqKKBcben3GY6XdukTBD34ez8i36mJ93eeyyYrWJEDp39OTSWnn16y523SL+1nwrfz1fTK+N9o2vjqGOukSWXc45/NLq+pLHcfyTPy/7LmpF8eP8+emM+9b6+T5Ofckfusn5nzPx59fPg9+9x0fj1X6Dsd6jXbTxiPIgpkg1sAwgZY8Mab1pEw/Kdf0/9QC+e2b3QIK3MUea+CfV1o+/uP1RxcTyvwsM6KfygxpUJXy43QclDEnk+77KcrlXk6W3CQxeOxWrXTnCkDiOQG1RsgL03Enck9mfXFJyp29+MhdaJP7wkbOyMPQiDVHr521JxlFuTz7HHa7nss59kGUk2t3f5b96sau87X+BFr9cqvBfdI7fPJIaHCfl8+PJic256oG+xFPmPt5Eqf7gLbOSyWdOPt4NHq7J4+zXAZ5fCStJ+V7+kzMnpsT82fPTXlm5t5bEwtfudjKiZ0rveQCBCCwdAJhazDPxOyHSyuuGy06EuXQH559eo/Fumif/XJYVYRZ+XHqTW/8coo17ofLVwp8kwi59tmb78UWtVeg1OWssiXJ6IvrB5cv8m2ZBPSFKepeuyVvOY+WKUdA2wOdnJAX9FuzuuUGtEGWaghI4DS7LxMDN9rq0qyWLVEANvPwNTW4z3ifQoL9iDa0PV6uLd/1+SNW6F1RDm9JP09q3y+VUS3nybPzRf3lrT1QBIQABHwEghVMG5siislmVcqUr0NVpYuSuSMvD/1Z65eXq61obe2VupbOWsekcrr3pFxfn5Q26Voc2aNJ133XVG4JXvRaJlF7vrxT00VJj7+43roZ7an9bVBC9sIk0QQ/FrH7tRNd1gupcvLTj88f1U42BJpOQF5sM8VS17C1eWKg9cF9xkfZF+xHfpcSl+Hxci36rmspf/7x+Y3EK6f41maLIJFM7KiMTXfLXgQs2oAABMojEKxgjkadfpFmO521UhWpIm1XldcNT+9K3ccz1y8uxuJaephYAQ//tTFzPRcKxq6QtXhQ2DVV5FR5VW5pdv1C00U/HquSXrQQ+RdLQK2ZOsudzMzXQdFMFEt3Q6M4tlk5WewoL6S1o8RiIi+2bVcslaauNZZgK/m/eXIvt2lNYmqJHuTeTWfBfnKztCFRJ750AkwnU2ph0UwslhJd++Xzd5K9PNsAmT5AAAKNIhCsYJq776qLxUlo72KJDBmatzH5ZL/GeHh6S+SdXcmUwmoFjLqj19E3bx7ObemNCmxkbs1RMGtxh1X5VM65rJZnDR6n3IKbJ+NyCSQz86JoJhZNeTEWafJfJMsU99zqlSmWuHSVibeSuvSFVu8TccOTF+135MW28YFsinAajf69JfnX88o4Gz/NS29kmn/pSE+jRTeybwWF1gkwVebUWiiTDTtSPPz3tmBbU7IP9G9QJwfPLJYvDqbk4zIEIACBygmEB/lRUWJ5YNqwRe2qlDi10qli2qZDlczD17eSvS4962283RaWUs+2+ebNQTzqPC7KKonk6uINbztphiA3ZxmzqDP6SsZ5W4rlvjAFtnumXAq3wPxkqxEBtWiKOPqytCORI7dMrBZz15P7Y6NMMeV5ceys6ccj+zRts8zqqaskAsk46WSDsydZ1OBu9zfHq25dDgnu87cfX/RLGobaVLPKwX7yBiG17h4k29bo5MOZp1FPypTxm/pr0zqxY2zfRO5rXGB/xcInCEBg+QTkfSH8SLemUFfJwMPtx3feexCYuVnZ1MLXXftehN4sTXCZDZY9R5+GbvGigYN0bWdo+2JFfMdMUfR0LWds7T1x79kOrc+XT2ZSj3Qv0Wlt+sqTXl8CapUYjUwv3RfxU3mQrLvwv4W+9EzXBv3VWXfc6Vzrr7qCUt+RRjIIQKAsAhoIqmNdz0Xmffmt3ZR/GwUm6/oix4XnppOJHbw7yhob6oEABMolUEjB1KZlP8z/lVPoLFwpey6W2+USa1Mlc23tYZlKWSKduiKLtTjumKdT10yqpVHcV0N7kyh7d97TNaS/HrrH50hcmdXNVn/oyjw0oA9rLssk2qi6dCPwTOBu15zwIpTR4AwBCEDgKgFVPm0UX3q3wjvgKieuQAACzSBQXMHUdYOBbrKKQKKr7bR9WwrdF1J6ulfJkJ+te+2re+uoI2s/dV9OOaJv3zwppNhasyvW0WPdo1QsTR+J9agn1Vz6MdN6SzmkrWRrl1IqoxIIQAACEIAABCAAAQhAoCkECiuYRq1esXkV3EFRkETZuBGcv6EZU/fhJyJ+NUrbZS6qZG4sqK3LLed/G0TG3Q118c2vilQIQAACEIAABCAAAQhAoGkEiiuY0kNxk1UFczO0s6tgxUxYnLmt6hrVYDahDOueT6yi/WQblylrPOsuP/JBAAIQgAAEIAABCEAAAvMTCN+m5EJbojA+vvDV+1EWtO/NvR2Ht5UaZJCIufGd67JRvduvgTSLEmEgLtO77s71WwTzWRRy2oEABCAAAQhAAAIQgEA9CcykYKZrKgfBXZIAMlG3ez84f8MzauTceNi5oVa9hnclV3wNHCT9/Jj1lrmYSIQABCAAAQhAAAIQgMDKEJjJRVbpzBLYRpWuons9Nn0kOt+82U4suGVHaV0mGFlXKwGDdlhrucxBoG0IQAACEIAABCAAAQjUj8DMCqa6vMo+kK+lS+uh3UrW6akr5QoeqUL+VRFeNcQ0EPfo3bZHBa4hd0SCAAQgAAEIQAACEIBAIwjM5CKb9CwJ5uIKrcUUbbYn22usjKvsxTvgzG329IauV5R/JxfTmvHZ7cfD0xsol80YLaSEAAQgAAEIQAACEIDAMgjMbsFUaWewYkqpQRyZW9l+jsvodB3aVNfZ2Jp7qnTXQZ5pMug6Szfs7q6aa/M0HlyHAAQgAAEIQAACEIAABKYTmE/BlHqTNYbWPJnexMSUY7GGEXVU0ejWJmujLePMPfm2OZHWci4ey56Wu6yzXA58WoUABCAAAQhAAAIQgEATCcytYGqni+6LqWUSy9id9+7qZ46UQKpsOuc+tcb25Grw+tYSGbLOskSYVAUBCEAAAhCAAAQgAIFVIlCKgtl99ksvNvb7wuCceRR/cX23cLkVKWCf/XIoiubW4rqr6yyHj9jPcnHEaQkCEIAABCAAAQhAAAJtIlCKgqlAom/ePJTgNYUD+EhU0h0Cx1y9pWZ0Pb5aUcAV1lkGQCILBCAAAQhAAAIQgAAEIOAlUJqCmQT8WVt7Jb6vG95WxzKgZI4B+dObzSg2ahGu1kWW/SzHwPMVAhCAAAQgAAEIQAACEJiHQHkKpkpxphi9mkUglMyU2mKUy4FYm/fjP15/NMtYUQYCEIAABCAAAQhAAAIQgMAkArPvgzmptj9cP5bwPfuTknzXnESiVbdQX75Wpy9CudR1r7KfJcplq+8kOgcBCEAAAhCAAAQgAIGlECjXgpl2Yb7gNBJo5s57D5ZCY4mNdp79c8uZWLd7qcQt1hnTd8PODvtZLnGQaRoCEIAABCAAAQhAAAItJ1CJgpmsx+yu6RrCzZn4WXMQn57urko00+jbN/dl7erDmVj5CrHO0keIdAhAAAIQgAAEIAABCECgJALVKJgq3PzunsdxZHZM4nZbUm/rVs3h63Xb7T6paCsS1lnWbbyRBwIQgAAEIAABCEAAAi0nUO4azIuwRDEUBfGWXBpcvFzgcxJJNbHuFSjUlKy6d2gkUXcrUS5ZZ9mU2wA5IQABCEAAAhCAAAQg0CoC1VkwU0xl7OfYqn0axWoZddb2Ztkz1HfnJessI7PbaquvDwLpEIAABCAAAQhAAAIQgMDSCFSuYGrPylAypRqxhLrHTQ4AlATysfHDWfYKzb1DZJ2lddHu6M7vjnLzkQgBCEAAAhCAAAQgAAEIQKBCAgtRMFX+kpRMI5a/Exub/dEX1w8q5FJq1eoOOzJ2T2D3Sq24BUp3yTyoDgIQgAAEIAABCEAAAhBYIoGFKZjax9KUTK2sAYpmhYql9n+lIu3qkHNAAAIQgAAEIAABCEAAAvUmsFAFM0Exf3TZy0RF0ZQLj2Vbk4O6bGuiinRszb0KLJbiXSv7WbLO8vI9wDcIQAACEIAABCAAAQhAoBYEFq9garfPlMwn8mm2fTKnoROrnqxF/HopaxG1T858JRrgloi3Pk3Ema+zznJmdBSEAAQgAAEIQAACEIAABBZDYDkKpvYt2QNy7bAKK59Wr5FnrbU/iCWxX0lU1cN/bXQ6o55YEz+tTKnUjrDO8owC/0MAAhCAAAQgAAEIQAACtSewPAUzRRM9++WBLCjcq5jUQFxLj61xP1hnT6x1J8Ph8DjYpVask93YrccSpEfq+UgU101RKjcqljldZ9nZN3ffPam8LRqAAAQgAAEIQAACEIAABCAwJ4GlK5gqvwbDia19shClbQIwURr745etFQVyEUrkeMPyXeXpGLc/vPPeFbkmZOcSBCAAAQhAAAIQgAAEIACBWhCohYKZkBCX2aiztifRUe/XgswyhGhAZNxlYKFNCEAAAhCAAAQgAAEIQKAZBOqjYKa8EmumsQ/la7kBgOo9HgOxWz6Oh8NHwW679e4P0kEAAhCAAAQgAAEIQAACK0igdgpmNgbRt2/ui6/onnwvPyJr1kgdzsl+lqyzrMNQIAMEIAABCEAAAhCAAAQgMB+B2iqYSbfUbbbbFZdZ+5V8b5WiyTrL+W5cSkMAAhCAAAQgAAEIQAAC9SNQbwUz49UiRVO3T+kY85gAPtngcoYABCAAAQhAAAIQgAAE2kKgGQpmRlsUzU5nbUv2ntxbVoTXTJSC54EELzqKT3GFLciN7BCAAAQgAAEIQAACEIBAgwg0S8G8CFb2poyc+UoUzS25XEv3WXWDFRmfjkanRwTvuTh4fIYABCAAAQhAAAIQgAAE2kiguQrmhdHoPPvnlrPxl3Kpt2zLprrAWmt/EGulKJXvnlwQk48QgAAEIAABCEAAAhCAAARaTaAVCualETqzbPacc5+KordZtcKpVkpr3A+RnFlXeWkk+AIBCEAAAhCAAAQgAAEIrBiB9imY4wMo6za73e5mnCibbt0Z+6lmkY5vyinUtfZYFMmBtebEOPcPazrHoyg+MX+4fjzeHN8hAAEIQAACEIAABCAAAQhAAALGHP5rAwwQgAAEIAABCEAAAhCAAAQgAAEIQAACEIAABCAAAQhAAAIQgAAEIAABCEAAAhCAAAQgAAEIQAACEIAABCAAAQhAAAIQgAAEIAABCEAAAhCAAAQgAAEIQAACEIAABCAAAQhAAAIQgAAEIAABCEAAAhCAAAQgAAEIQAACEIAABCAAAQhAAAIQgAAEIAABCEAAAhCAAAQgAAEIQAACEIAABCAAAQhAAAIQgAAEIAABCEAAAhCAAAQgAAEIQAACEIAABCAAAQhAAAIQgAAEIAABCEAAAhCAAAQgAAEIQAACEIAABCAAAQhAAAIQCCTw/wEh5YoM2evxxwAAAABJRU5ErkJggg=='
                                                                    style='display:block; width:152px!important; font-family:Helvetica, Arial, sans-serif; font-size:22px; line-height:26px; color:#000000; text-transform:uppercase; text-align:center; letter-spacing:1px;'
                                                                    width='152'></a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table border='0' cellpadding='0' cellspacing='0' style='width:600px;'>
                                        <tr>
                                            <td bgcolor='#fafbfc' style='width:7px; font-size:1px;'><br></td>
                                            <td bgcolor='#f5f6f7' style='width:1px; font-size:1px;'><br></td>
                                            <td bgcolor='#f0f2f3' style='width:1px; font-size:1px;'><br></td>
                                            <td bgcolor='#edeef1' style='width:1px; font-size:1px;'><br></td>
                                            <td bgcolor='#ffffff'>
                                                <table border='0' cellpadding='0' cellspacing='0' style='width:100%;'>
                                                    <tr>
                                                        <td class='pinkBanner' align='center'
                                                            style='font-family:  Helvetica, Arial, sans-serif;background-color:#15c26b;padding:10px 20px 10px 20px;letter-spacing:1px;font-weight:bold;color:#ffffff;text-align:center;width:520px; font-size:20px; line-height:28px;text-transform:uppercase;'>
                                                            Limited Time Offer
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style='text-align:center;padding:30px 40px 10px 40px;'>
                                                            <div
                                                                style='display:inline-block; width:100%; max-width:520px;'>
                                                                <table align='center' border='0' cellpadding='0'
                                                                    cellspacing='0'
                                                                    style='font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 24px; text-align:left; width:100%;'>
                                                                    <tr>
                                                                        <td class='body-text' align='left'
                                                                            style='font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 24px; text-align:left; width:100%;'>
                                                                            <p style='Margin:0 0 25px 0; font-size:18px; line-height:23px; 
                                                                                font-family:  Helvetica, Arial, sans-serif; 
                                                                                color:#102231; font-weight:bold;'>
                                                                                Hi #name,</p>
                                                                            <p style='Margin:0 0 20px 0;color:#525C65;'>
                                                                                Time is running out on this
                                                                                special offer. Act now to <a
                                                                                    href='https://www.udacity.com/courses/all'
                                                                                    style='text-decoration:none;color:#00afe1;'
                                                                                    target='_blank'>get 75% off</a> of
                                                                                the Udacity Nanodegree program of your
                                                                                choice. Choose from programs that can
                                                                                help you increase your earning potential
                                                                                and take your tech career to the next
                                                                                level. </p>

                                                                            <p style='Margin:0 0 20px 0;color:#525C65;'>
                                                                                Our graduates’ success speaks for
                                                                                itself. In fact, 73% of our graduates
                                                                                reported a favorable career change in
                                                                                the first 12 months after
                                                                                completing their Nanodegree program. And
                                                                                they report an average raise of
                                                                                24%!<sup>1</sup></p>

                                                                            <p style='Margin:0 0 20px 0;color:#525C65;'>
                                                                                Our stellar ratings show just how
                                                                                valuable Udacity can be if you’re trying
                                                                                to land a successful tech job or
                                                                                upskill. See below and explore our
                                                                                ratings across the board. Then <a
                                                                                    href='https://www.udacity.com/courses/all'
                                                                                    style='text-decoration:none;color:#00afe1;'
                                                                                    target='_blank'>check out our
                                                                                    catalog</a> and see which of our
                                                                                programs you’d like 75% off to. Get
                                                                                started today!</p>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align='center' style='padding:0px 40px 30px;'>
                                                            <table width='238' border='0' cellpadding='0'
                                                                cellspacing='0'
                                                                style='border-collapse:separate !important; border-radius:5px; border:1px solid #1fbae8; background-color: #ffffff;'>
                                                                <tr>
                                                                    <td width='238' height='44' align='center'
                                                                        valign='middle'
                                                                        style='font-family:  Helvetica, Arial, sans-serif; font-size:13px;  font-weight:bold;'>
                                                                        <a href='https://www.udacity.com/courses/all'
                                                                            target='_blank'
                                                                            style='text-decoration: none; color: #01b3e3; letter-spacing: 2px; display: block; padding-top: 8px; padding-bottom: 8px; font-size: 16px; text-transform:uppercase;'>ENROLL
                                                                            Now</a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <tr>
                                <td align='center' style='padding-bottom:40px;padding-left:20px;padding-right:20px;'>
                                    <table border='0' cellpadding='0' cellspacing='0'
                                        style='font-family:  Helvetica, Arial, sans-serif; font-size:13px; line-height:18px;  text-align:center; max-width:600px;'>
                                        <tr>
                                            <td class='body-text' align='center'
                                                style='color:#b7bdc1; font-family: Helvetica, Arial, sans-serif; font-size:13px; line-height:18px;  text-align:center;'>
                                                <p style='color:#b7bdc1;'><span class='appleLinksGrey'><a
                                                            href='https://www.udacity.com/courses/all'
                                                            style='text-decoration:none!important;color:#b7bdc1;'>
                                                            {year} Udacity, Inc.
                                                            &nbsp;•&nbsp; 2440 W El Camino Real •
                                                            Mountain View, CA
                                                            94040</a></span></p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <div style=' width:100%; max-width:620px;'>
                            <table border='0' cellpadding='0' cellspacing='0' style='width:100%;'>
                                <tr>
                                    <td align='center' bgcolor='#7d97ad' style='padding:10px 0;'>
                                        <table border='0' cellpadding='0' cellspacing='0'
                                            style='font-family:  Helvetica, Arial, sans-serif; font-size:14px; line-height:19px;  text-align:center; width:auto;'>
                                            <tr>
                                                <td class='body-text' style='color:#ffffff;'>Be in demand</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </center>
            </td>
        </tr>
    </table>
    </div>
</body>

</html>"
                ];


                $template_to_upload = \App\Models\PhishingTemplate::updateOrCreate($template);
    }
}
