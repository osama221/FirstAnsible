<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Marj3FakeTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $template = [
                'language' => 'an',
                'title' => 'MARJ3 Fellowship Batch 13 - open call ',
                'description' => 'Greetings from MARJ3 Team
                MARJ3 fellowship batch 13 ',
                'game_id' => 1, // leave it, Don't change
                'attachment_type_id' => 3, // Random between 1 to 10
                'is_phishing'=> 1, // 0 = false / 1 = true
                'reason'=>'Fake sender Email',
                'short_reason'=>'Fake sender Email',
                'sender' => 'security@marj3_.net>',
                'template'=> "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
                <html lang='ar' xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
                <head>
                <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <meta name='x-apple-disable-message-reformatting'>
                <title>MARJ3 Fellowship Batch 13 - open call </title>
                <!--[if !mso]><!-- --><meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <!--<![endif]-->
                <!--[if gte mso 9]><xml>
                    <o:OfficeDocumentSettings>
                    <o:AllowPNG/>
                    <o:PixelsPerInch>96</o:PixelsPerInch>
                    </o:OfficeDocumentSettings>
                </xml><![endif]-->

                <style type='text/css'>
                    #outlook a{padding:0;}
                    #MessageViewBody, #MessageWebViewDiv{width:100% !important;}
                    body{width:100%!important;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;margin:0!important;padding:0!important;}
                    .ExternalClass{width:100%;}
                    .ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{line-height:100%;}
                    .bodytbl{margin:0;padding:0;width:100% !important;}
                    img{outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;display:block;max-width:100%;}
                    a img{border:none;}
                    p,blockquote{margin:0;margin-bottom:1em;}

                    table{border-collapse:collapse;;}
                    table td{border-collapse:collapse;}


                    body,.bodytbl{background-color:#F3F4F4/*Background Color*/;}
                    table{font-family:Helvetica,Arial,sans-serif;font-size:15px;color:#585858;}
                    td,p{line-height:24px;color:#585858/*Text*/;}
                    td,tr{padding:0;}
                    ul,ol{margin-top:24px;margin-bottom:24px;}
                    li{line-height:24px;}
                    pre{word-wrap:break-word;word-break:break-all;white-space:pre-wrap;}

                    a{color:#5ca8cd/*Contrast*/;text-decoration:none;padding:2px 0px;}
                    a:link{color:#5ca8cd;}
                    a:visited{color:#5ca8cd;}
                    a:hover{color:#5ca8cd;}

                    h1,.h1,h2,.h2,h3,.h3,h4,.h4,h5,.h5,h6,.h6{font-family:Helvetica,Arial,sans-serif;font-weight:normal;line-height: 150%;}
                    h1,.h1{font-size:28px;letter-spacing:-1px;margin-bottom:16px;margin-top:4px;}
                    h2,.h2{font-size:22px;letter-spacing:-1px;margin-bottom:16px;margin-top:4px;}
                    h3,.h3{font-size:18px;margin-bottom:12px;margin-top:2px;}
                    h4,.h4{font-size:14px;margin-bottom:12px;margin-top:2px;}
                    h5,.h5{font-size:14px;font-weight:bold;}
                    h6,.h6{font-size:13px;font-weight:bold;}

                    .wrap.body,.wrap.header,.wrap.footer{background-color:#DDEBFD/*Body Background*/;}
                    .padd{width:24px;}

                    .small{font-size:11px;line-height:18px;}
                    .separator{border-top:1px dotted #E1E1E1/*Separator Line*/;}
                    .btn{margin-top:10px;display:block;}
                    .subline{line-height:18px;font-size:16px;letter-spacing:-1px;}
                    .btn img,.social img{display:inline;margin:0;}

                    table.textbutton td{background:#efefef/*Text Button Background*/;padding:5px 14px 3px 14px;color:#585858;display:block;min-height:24px;border:1px solid #DDEBFD/*Text Button Border*/;margin-bottom:3px;border:1px solid #ccc;border-radius:2px;margin-right:4px;margin-bottom:4px;}
                    table.textbutton a{color:#585858;font-size:16px;font-weight:normal;line-height:16px;width:100%;display:inline-block;}

                    .cta table.textbutton td{padding:8px 14px 6px 14px;}
                    .cta table.textbutton a{font-size:22px;line-height:26px;}

                    @media only screen and (max-width: 599px) {
                        body{-webkit-text-size-adjust:120% !important;-ms-text-size-adjust:120% !important;}
                        table{font-size:15px;}
                        .subline{float:left;}
                        .padd{width:12px !important;}
                        .wrap{width:96% !important;}
                        .wrap table{width:100% !important;}
                        .wrap img{max-width:100% !important;height:auto !important;}
                        .wrap .m-0{width:0;display:none;}
                        .wrap .m-b{margin-bottom:24px !important;}
                        .wrap .m-b,.m-b img{display:block;min-width:100% !important;width:100% !important;}
                        table.textbutton td{height:auto !important;padding:8px 14px 8px 14px !important;}
                        table.textbutton a{font-size:18px !important;line-height:26px !important;}
                        .cta table.textbutton a{font-size:22px !important;line-height:32px !important;}
                    }

                </style>
                <style type='text/css'>

                    h4
                    {
                        text-align: left;
                    }

                @media screen
                {

                    .headerLineTitle
                    {
                        width:1.5in;
                        display:inline-block;
                        margin:0in;
                        margin-bottom:.0001pt;
                        font-size:11.0pt;
                        font-family:'Calibri','sans-serif';
                        font-weight:bold;
                    }

                    .headerLineText
                    {
                        display:inline;
                        margin:0in;
                        margin-bottom:.0001pt;
                        font-size:11.0pt;
                        font-family:'Calibri','sans-serif';
                        font-weight:normal;
                    }

                   .pageHeader
                   {
                        font-size:14.0pt;
                        font-family:'Calibri','sans-serif';
                        font-weight:bold;
                        visibility:hidden;
                        display:none;
                   }
                }

                @media print
                {
                    .headerLineTitle
                    {
                        width:1.5in;
                        display:inline-block;
                        margin:0in;
                        margin-bottom:.0001pt;
                        font-size:11.0pt;
                        font-family:'Calibri','sans-serif';
                        font-weight:bold;
                    }

                    .headerLineText
                    {
                        display:inline;
                        margin:0in;
                        margin-bottom:.0001pt;
                        font-size:11.0pt;
                        font-family:'Calibri','sans-serif';
                        font-weight:normal;
                    }

                   .pageHeader
                   {
                        font-size:14.0pt;
                        font-family:'Calibri','sans-serif';
                        font-weight:bold;
                        visibility:visible;
                        display:block;
                   }

                }
                </style>
                </head>
                <body data-new-gr-c-s-check-loaded='14.1018.0' data-gr-ext-installed='' data-new-gr-c-s-loaded='14.1018.0' style='font-family:Helvetica; background-color:#F3F4F4;width:100%!important;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;margin:0!important;padding:0!important'>
                <div style='max-width: 100%;'>
                <table class='bodytbl' width='100%' cellpadding='0' cellspacing='0' role='presentation' style='font-family:Helvetica,Arial,sans-serif;font-size:15px;color:#585858;border-collapse:collapse;;background-color:#F3F4F4;margin:0;padding:0;width:100% !important'>
                <tbody>
                <tr style='padding:0'>
                    <td align='center' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse'>
                <div style='display:none;width:0;height:0;max-height:0;line-height:0;overflow:hidden'></div>
                <a name='top' style='color:#5ca8cd;text-decoration:none;padding:2px 0px'></a>


                        <table width='600' cellpadding='0' cellspacing='0' class='wrap header' role='presentation' style='font-family:Helvetica,Arial,sans-serif;font-size:15px;color:#585858;border-collapse:collapse;;background-color:#DDEBFD'>
                        <tbody>
                <tr style='padding:0'><td height='24' colspan='3' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse'></td></tr>

                        <tr style='padding:0'>
                            <td width='24' class='padd' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse;width:24px'>‌</td>
                            <td valign='top' align='center' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse'>
                                <table cellpadding='0' cellspacing='0' class='o-fix' role='presentation' style='font-family:Helvetica,Arial,sans-serif;font-size:15px;color:#585858;border-collapse:collapse;'>
                                <tbody>
                <tr style='padding:0'>

                                    <td width='552' valign='top' align='left' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse;'>
                                        <table cellpadding='0' cellspacing='0' align='left' role='presentation' style='font-family:Helvetica,Arial,sans-serif;font-size:15px;color:#585858;border-collapse:collapse;'>
                                        <tbody>
                <tr style='padding:0'>
                                            <td width='264' class='small' align='left' valign='middle' style='padding:0;line-height:18px;color:#585858;border-collapse:collapse;font-size:11px;'>
                                                <img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAMAAABHPGVmAAADAFBMVEVHcEwkjdEbgMEiis4Xeroafb4mj9UVd7Yqldsoktgeg8UhiMsdgsMgh8ofhsgfhsgfhsgfhsgfhskqldwqlNorldsrltwVdrQUdrUUdrQVeLcUdrQrldwrldxFk8WhyOI4mtuAv+hTpt4ohcEhgb49ksgefbvW6fVVodJeq900kMxMpd9Jodtmp9KBud1dpNLo8vlMm86gzuu/3vOXxuRBmdNIms8jicw8nNvf7ver1O8UdbRlqtdEn9uax+Oqz+aKweUsiMNhqNbJ4fGx1u/X6fRqrtuay+p9uuM1ks9VpNiHvuI3ltS92ew5kclFlsp4stdaotG62e1Fmc8fg8OSxeYmg793tt9ToNGdyeUjhsXK4/SAvOI3lNF+vOXT6PaXxuV6s9lusd2TwuClzOVxs973+v1yr9czjMXd7fdpsuF9t910s9vO5fRkrt+WxOIliMiYx+au1Oxap9koj9Pi8PgpkNS42vFepdSu0uo9ltDG4PJiq9uOxerl8fns9fpJntUmjM4jiMulz+q32O59u+RjrN3+/v4wkM4si8knjdBRodbz+Px0t+Tp8/n1+fz7/P4risZTo9dRoNSTwd5NmcnC3e96t+Avjsy21uotjcq21uyMw+ZRnc6HvN7T5/VlsOGNxOnv9vv8/f4wkdDh7vdQntGWxeNwteJust9rq9X5/P1ytuK31+xxtuQrldsqlNvS5vQpk9gWebfT6fdwtODn8voljtImj9MXebknkNYmjtIafb4Zfb0afr8iiMwZfLsbfr8VdrUiiMsji88dgcIji84dgcMrltwUdrQWeLYbgMAeg8Qhh8koktgVd7Ugh8kehMUehMYljdIqldsmjtMokdYVd7Yrlt0Yerofhcgmj9QYe7onj9T+/v8afr4iic0pktgiicwjis0okdcbf78ki88jis4cgcIXerkhiMsbf8AdgsMdgsQWeLcljdEYe7safb0pk9kghsgXebgghskfhMYqlNonkNUhh8oZfLwkjNAeg8UfhcccgMH////EZ8f7AAAAHnRSTlMATExMTExMTExMTExMBkIaoVDJQhpQoUJQyRqhy8lDBSdgAAAI+klEQVR42u3YWVhV1xUHcDKPDjFtk85DhmYywSSOdR5w1jii2LSRyhRx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' alt='' style='width:100px;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;display:block;max-width:100%' width='100' height='100' border='0' editable='' label='Logo' data-id='480327' class=''>
                                            </td>
                                        </tr>

                                        </tbody>
                </table>
                                        <table cellpadding='0' cellspacing='0' align='right' class='m-b' role='presentation' style='font-family:Helvetica,Arial,sans-serif;font-size:15px;color:#585858;border-collapse:collapse;'>
                                        <tbody>
                <tr style='padding:0'>
                                            <td width='264' height='24' align='right' valign='bottom' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse;'>
                                                <div class='subline' style='line-height:18px;font-size:16px;letter-spacing:-1px'>MARJ3 Fellowship Batch 13 - open call </div>
                                            </td>
                                        </tr>

                                        </tbody>
                </table>
                                    </td>

                                </tr>

                                </tbody>
                </table>
                            </td>
                            <td width='24' class='padd' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse;width:24px'>‌</td>
                        </tr>

                        <tr class='m-0' style='padding:0'><td height='24' colspan='3' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse'></td></tr>

                        </tbody>
                </table>



                        <table width='600' cellpadding='0' cellspacing='0' class='wrap body' role='presentation' style='font-family:Helvetica,Arial,sans-serif;font-size:15px;color:#585858;border-collapse:collapse;background-color:#DDEBFD'>
                        <tbody>
                <tr style='padding:0'><td height='12' colspan='3' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse'></td></tr>

                        <tr style='padding:0'>
                            <td width='24' class='padd' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse;width:24px'>‌</td>
                            <td width='552' valign='top' align='left' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse'>

                                <h2 style='font-family:Helvetica,Arial,sans-serif;font-weight:normal;line-height: 150%;font-size:22px;letter-spacing:-1px;margin-bottom:16px;margin-top:4px'><br data-mce-bogus='1'></h2>
                                <p style='line-height:24px;color:#585858;margin:0;margin-bottom:1em'><span style='color: #000000' data-mce-style='color: #000000;'>Greetings from <strong>MARJ3 Team </strong></span><br><span style='color: #000000' data-mce-style='color: #000000;'>MARJ3 fellowship batch <span style='color: #ff0000' data-mce-style='color: #ff0000;'><strong>13</strong> </span>is open until <strong><span style='color: #ff0000' data-mce-style='color: #ff0000;'>15/9/2021 11:59:59,</span></strong> don't miss your chance to join MARJ3 community and explore the world of new scholarships and an infinite number of opportunities. </span></p>
                                <div class='btn' style='margin-top:10px;display:block'>
                                    <table class='textbutton' align='left' role='presentation' style='font-family:Helvetica,Arial,sans-serif;font-size:15px;color:#585858;border-collapse:collapse;'><tbody><tr style='padding:0'><td align='center' width='auto' style='padding:5px 14px 3px 14px;line-height:24px;color:#585858;border-collapse:collapse;background:#efefef;display:block;min-height:24px;border:1px solid #ccc;margin-bottom:4px;border-radius:2px;margin-right:4px'><a href='{host}/execute/page/{link}' editable='' label='Read More' style='color:#585858;text-decoration:none;padding:2px 0px;font-size:16px;font-weight:normal;line-height:16px;width:100%;display:inline-block'>Apply Now </a></td></tr>
                </tbody></table>
                                </div>

                            </td>
                            <td width='24' class='padd' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse;width:24px'>‌</td>
                        </tr>

                        <tr style='padding:0'><td height='12' colspan='3' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse'></td></tr>

                        </tbody>
                </table>





                        <table width='600' cellpadding='0' cellspacing='0' class='wrap body' role='presentation' style='font-family:Helvetica,Arial,sans-serif;font-size:15px;color:#585858;border-collapse:collapse;background-color:#DDEBFD'>
                        <tbody>
                <tr style='padding:0'><td height='12' colspan='3' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse'></td></tr>

                        <tr style='padding:0'>
                            <td width='24' class='padd' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse;width:24px'>‌</td>
                            <td valign='top' align='center' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse'>
                                <table cellpadding='0' cellspacing='0' class='o-fix' role='presentation' style='font-family:Helvetica,Arial,sans-serif;font-size:15px;color:#585858;border-collapse:collapse;'>
                                <tbody>
                <tr style='padding:0'>

                                    <td width='552' valign='top' align='left' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse;'>
                                        <table cellpadding='0' cellspacing='0' align='left' role='presentation' style='font-family:Helvetica,Arial,sans-serif;font-size:15px;color:#585858;border-collapse:collapse;'>
                                        <tbody>
                <tr style='padding:0'>
                                            <td width='264' valign='top' align='left' class='m-b' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse;'>
                                            <h2 style='font-family:Helvetica,Arial,sans-serif;font-weight:normal;line-height: 150%;font-size:22px;letter-spacing:-1px;margin-bottom:16px;margin-top:4px'><span style='color: #000000' data-mce-style='color: #000000;'><strong>What are the fellowship benefits ? </strong></span></h2>
                                            <p style='line-height:24px;color:#585858;margin:0;margin-bottom:1em'><span style='color: #000000' data-mce-style='color: #000000;'><strong>1-</strong> Strong network of alumni of scholarships where you can get consultancy very fast.</span><br><br><span style='color: #000000' data-mce-style='color: #000000;'><strong>2-</strong> Attending MARJ3 events &amp; training for free.</span><br><br><span style='color: #000000' data-mce-style='color: #000000;'></span><br></p>
                                            <div class='btn' style='margin-top:10px;display:block'>

                                            </div>
                                            </td>
                                        </tr>

                                        </tbody>
                </table>
                                        <table cellpadding='0' cellspacing='0' align='right' role='presentation' style='font-family:Helvetica,Arial,sans-serif;font-size:15px;color:#585858;border-collapse:collapse;'>
                                        <tbody>
                <tr style='padding:0'>
                                            <td width='264' valign='top' align='left' class='m-b' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse;'>
                                            <h2 style='font-family:Helvetica,Arial,sans-serif;font-weight:normal;line-height: 150%;font-size:22px;letter-spacing:-1px;margin-bottom:16px;margin-top:4px'></h2>
                                            <br><br><br><span style='color: #000000' data-mce-style='color: #000000;'><strong>3-</strong> Certification of accomplishment for your fellowship.</span><br><br><br><span style='color: #000000' data-mce-style='color: #000000;'><strong>4-</strong> Recognitions and Trophies only for the best Follows every 6 weeks on their work.</span>
                                            <div class='btn' style='margin-top:10px;display:block'>

                                            </div>
                                            </td>
                                        </tr>

                                        </tbody>
                </table>
                                    </td>

                                </tr>

                                </tbody>
                </table>
                            </td>
                            <td width='24' class='padd' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse;width:24px'>‌</td>
                        </tr>

                        <tr style='padding:0'><td height='12' colspan='3' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse'></td></tr>

                        </tbody>
                </table>

                        <table width='600' cellpadding='0' cellspacing='0' class='wrap body' role='presentation' style='font-family:Helvetica,Arial,sans-serif;font-size:15px;color:#585858;border-collapse:collapse;;background-color:#DDEBFD'>
                        <tbody>
                <tr style='padding:0'>
                            <td width='600' valign='top' align='left' class='m-b' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse'>
                                <table cellpadding='0' cellspacing='0' class='o-fix' role='presentation' style='font-family:Helvetica,Arial,sans-serif;font-size:15px;color:#585858;border-collapse:collapse;'>
                                <tbody>


                                </tbody>
                </table>
                            </td>
                        </tr>

                        </tbody>
                </table>



                        <table width='600' cellpadding='0' cellspacing='0' class='wrap footer' role='presentation' style='font-family:Helvetica,Arial,sans-serif;font-size:15px;color:#585858;border-collapse:collapse;;background-color:#DDEBFD'>
                        <tbody>
                <tr style='padding:0'><td height='12' colspan='3' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse'></td></tr>

                        <tr style='padding:0'>
                            <td width='24' class='padd' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse;width:24px'>‌</td>
                            <td valign='top' align='center' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse'>
                                <table cellpadding='0' cellspacing='0' class='o-fix' role='presentation' style='font-family:Helvetica,Arial,sans-serif;font-size:15px;color:#585858;border-collapse:collapse;'>
                                <tbody>
                <tr style='padding:0'>

                                    <td width='552' valign='top' align='left' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse;'>
                                        <table cellpadding='0' cellspacing='0' align='left' role='presentation' style='font-family:Helvetica,Arial,sans-serif;font-size:15px;color:#585858;border-collapse:collapse;'>
                                        <tbody>
                <tr style='padding:0'>
                                            <td width='360' valign='top' align='left' class='small m-b' style='padding:0;line-height:18px;color:#585858;border-collapse:collapse;font-size:11px;'>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </td>
                                        </tr>

                                        </tbody>
                </table>
                                        <table cellpadding='0' cellspacing='0' align='right' role='presentation' style='font-family:Helvetica,Arial,sans-serif;font-size:15px;color:#585858;border-collapse:collapse;'>
                                        <tbody>
                <tr style='padding:0'>

                                        </tr>

                                        </tbody>
                </table>
                                    </td>

                                </tr>

                                </tbody>
                </table>
                            </td>
                            <td width='24' class='padd' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse;width:24px'>‌</td>
                        </tr>

                        <tr style='padding:0'><td height='24' colspan='3' style='padding:0;line-height:24px;color:#585858;border-collapse:collapse'></td></tr>

                        </tbody>
                </table>

                    </td>
                </tr>

                </tbody>
                </table>
                </div>
                </body>
                </html>

                "
                ];
                 $template_to_upload = \App\Models\PhishingTemplate::updateOrCreate($template);
    }
}
