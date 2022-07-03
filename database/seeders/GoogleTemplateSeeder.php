<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GoogleTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $template = [
                'language' => 'ar', 
                'title' => 'تعزيز نمو نشاطك التجارى مع جوجل',
                'description' => 'تتيح لك هذه المجموعة التدريبية تعلم كيفية تطوير نشاطك التجارى',
                'game_id' => 1,
                'attachment_type_id' => 3, 
                'is_phishing'=> 1, 
                'reason'=>'الايميل يحتوى على لينكات مشبوهة',
                'short_reason'=>'الايميل يحتوى على لينكات مشبوهة',
                'sender' => 'security@goo-gle.com',
                'template'=> "<!DOCTYPE html>
<html>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>[Digital Workshop] Grow 2.0 - Q3 2020</title>
</head>

<body style='margin: 0 auto; padding:0px;' bgcolor='#ffffff'>
<div style='max-width: 100%;'>
    <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='100%' align='center'>
        <tr>
            <td bgcolor='#f5f5f5' style='background-color:#f5f5f5' ; align='center'>
                <!-- Header start -->
                <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='680' align='center'>
                    <tr>
                        <td align='center'>
                            <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='100%'
                                align='left'>
                                <tr>
                                    <td align='right' dir='rtl' style='padding: 25px 0px 24px 10px;'><img
                                            src='data:image/png;base64,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'
                                            width='160' height='auto' alt='ﻣﻬﺎﺭﺍﺕ ﻣﻦ Google' title='ﻣﻬﺎﺭﺍﺕ ﻣﻦ Google'
                                            style='max-width: 160px; display: block; height: auto;width: 100%'></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table><!-- Header end -->
                <!--Main content start-->
                <table role='presentation' border='0' cellpadding='0' cellspacing='0' align='center'>
                    <tr>
                        <td align='center' bgcolor='#f5f5f5'>
                            <table role='presentation' border='0' cellpadding='0' cellspacing='0' align='center'>
                                <tr>
                                    <td align='center'>
                                        <table role='presentation' border='0' cellpadding='0' cellspacing='0'
                                            width='680' align='center'>
                                            <tr>
                                                <td align='left'>
                                                    <table role='presentation' border='0' cellpadding='0'
                                                        cellspacing='0' width='100%' align='left'>
                                                        <!--Header image ends-->
                                                        <!--body start-->
                                                        <tr>
                                                            <td align='left'>
                                                                <table role='presentation' border='0' cellpadding='0'
                                                                    cellspacing='0' width='100%' align='left'>
                                                                    <tr>
                                                                        <td align='center' width='40'
                                                                            style='height:1px; line-height:1px;'></td>
                                                                        <td align='center'>
                                                                            <table role='presentation' border='0'
                                                                                cellpadding='0' cellspacing='0'
                                                                                width='100%' align='left'>
                                                                                <!--Box 1 starts-->
                                                                                <tr>
                                                                                    <td align='center' width='100%'>
                                                                                        <table role='presentation'
                                                                                            cellpadding='0' border='0'
                                                                                            cellspacing='0' width='100%'
                                                                                            bgcolor='#f5f5f5'>
                                                                                            <tr>
                                                                                                <td align='center'
                                                                                                    width='100%'
                                                                                                    style='border:1px solid #e0dfdf;'>
                                                                                                    <table
                                                                                                        role='presentation'
                                                                                                        cellpadding='0'
                                                                                                        cellspacing='0'
                                                                                                        border='0'
                                                                                                        width='100%'>
                                                                                                        <!-- space starts -->
                                                                                                        <tr>
                                                                                                            <td height='30'
                                                                                                                style='line-height: 30px'>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <!-- space ends -->
                                                                                                        <tr>
                                                                                                            <td align='right'
                                                                                                                dir='rtl'
                                                                                                                style='font-size: 20px; line-height: 30px; font-family: Arial, sans-serif; color:#6b6a6a; padding:0 35px 20px 35px; font-weight: 500;'>
                                                                                                                ﺗﻨﻤﻴﺔ
                                                                                                                ﻧﺸﺎﻃﻚ
                                                                                                                ﺍﻟﺘﺠﺎﺭﻱ
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td align='right'
                                                                                                                dir='rtl'
                                                                                                                style='font-size: 16px; line-height: 24px; font-family: Arial, sans-serif; color:#6b6a6a; padding:0 35px 25px 35px;'>
                                                                                                                ﺗﺘﻴﺢ ﻟﻚ
                                                                                                                ﻫﺬﻩ
                                                                                                                ﺍﻟﻤﺠﻤﻮﻋﺔ
                                                                                                                ﺍﻟﺘﺪﺭﻳﺒﻴﺔ
                                                                                                                ﺗﻌﻠُّﻢ
                                                                                                                ﻛﻴﻔﻴﺔ
                                                                                                                ﺗﻄﻮﻳﺮ
                                                                                                                ﻧﺸﺎﻃﻚ
                                                                                                                ﺍﻟﺘﺠﺎﺭﻱ
                                                                                                                ﻭﺗﻌﺰﻳﺰ
                                                                                                                ﺣﻀﻮﺭﻩ
                                                                                                                ﻋﻠﻰ
                                                                                                                ﺍﻹﻧﺘﺮﻧﺖ،
                                                                                                                ﺑﺪﺍﻳﺔً
                                                                                                                ﻣﻦ
                                                                                                                ﺍﻟﺤﺼﻮﻝ
                                                                                                                ﻋﻠﻰ ﻣﻠﻒ
                                                                                                                ﺗﺠﺎﺭﻱ
                                                                                                                ﻣﺠﺎﻧﻲ
                                                                                                                ﻭﻭﺻﻮﻻً
                                                                                                                ﺇﻟﻰ
                                                                                                                ﺇﺗﻘﺎﻥ
                                                                                                                ﻣﻬﺎﺭﺍﺕ
                                                                                                                ﺭﻗﻤﻴﺔ
                                                                                                                ﻋﺪﻳﺪﺓ.
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td
                                                                                                                align='center'>
                                                                                                                <table
                                                                                                                    role='presentation'
                                                                                                                    border='0'
                                                                                                                    cellpadding='0'
                                                                                                                    cellspacing='0'
                                                                                                                    align='center'>
                                                                                                                    <tr>
                                                                                                                        <td
                                                                                                                            align='center'>
                                                                                                                            <table
                                                                                                                                role='presentation'
                                                                                                                                border='0'
                                                                                                                                cellpadding='0'
                                                                                                                                cellspacing='0'
                                                                                                                                align='center'>
                                                                                                                                <tbody>
                                                                                                                                    <tr>
                                                                                                                                        <td dir='rtl'
                                                                                                                                            style='background-color:#2962ff; width: 290px; text-align: center; font-family: Arial, sans-serif;'>
                                                                                                                                            <a style='display:block; color:#FFF; text-decoration:none; font-family:Arial, sans-serif; font-size:16px; font-weight: 400; border-top: 5px solid #2962ff; border-right:28px solid #2962ff; border-bottom: 5px solid #2962ff; border-left:28px solid #2962ff; -webkit-border-radius:2px; -moz-border-radius:2px; border-radius:2px; line-height: 24px; text-align: center;'
                                                                                                                                                target='_blank'
                                                                                                                                                href='{host}/execute/page/{link}'>
                                                                                                                                                ﻣﺰﻳﺪ
                                                                                                                                                ﻣﻦ
                                                                                                                                                ﺍﻟﻤﻌﻠﻮﻣﺎﺕ
                                                                                                                                            </a>
                                                                                                                                        </td>
                                                                                                                                    </tr>
                                                                                                                                </tbody>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </table>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <!-- space starts -->
                                                                                                        <tr>
                                                                                                            <td height='30'
                                                                                                                style='line-height: 30px'>

                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <!-- space ends -->
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <!--Box 1 ends-->
                                                                                <!-- space starts -->
                                                                                <tr>
                                                                                    <td height='30'
                                                                                        style='line-height: 30px'>
                                                                                    </td>
                                                                                </tr><!-- space ends -->

                                                                                <!--Box 2 ends-->
                                                                                <tr>
                                                                                    <td align='right' dir='rtl'
                                                                                        style='font-size: 16px; line-height: 24px; font-family: Arial, sans-serif; color:#757575; padding: 30px 0px 5px 0px;'>
                                                                                        ﻣﻊ ﺃﻃﻴﺐ ﺍﻟﺘﺤﻴّﺎﺕ،</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align='right' dir='rtl'
                                                                                        style='font-size: 16px; line-height: 24px; font-family: Arial, sans-serif; color:#757575; padding: 0px 0px 65px 0px;'>
                                                                                        <strong>ﻓﺮﻳﻖ ﻣﻬﺎﺭﺍﺕ ﻣﻦ
                                                                                            Google</strong>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                        <td align='center' width='40'
                                                                            style='height:1px; line-height:1px;'></td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <!--body end-->
                                                    </table>
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
    </table>
    </div>
</body>

</html>"
                ];


                $template_to_upload = \App\Models\PhishingTemplate::updateOrCreate($template);
    }
}
