<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HasoubTemplateSeeder extends Seeder
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
                'title' => 'مرحبا بك فى حسوب',
                'description' => 'نحن سعداء بانضمامك وبقي خطوة واحدة فقط لتفعيل حسابك',
                'game_id' => 1,
                'attachment_type_id' => 4,
                'is_phishing'=> 1,
                'reason'=>'المرسل غير موثوق فيه',
                'short_reason'=>'المرسل غير موثوق فيه',
                'sender' => 'security@has-oub.com',
                'template'=> "<!DOCTYPE html>
<html dir='rtl'>

<head>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <title>Hsoub</title>
</head>

<body
    style='font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; box-sizing: border-box; direction: rtl; background-color: #fff; color: #262626; height: 100%; hyphens: auto; line-height: 1.8; margin: 0; -moz-hyphens: auto; -ms-word-break: break-all; width: 100% !important; -webkit-hyphens: auto; -webkit-text-size-adjust: none; word-break: break-word;'>
    <div style='max-width: 100%;'>
    <table class='wrapper' width='100%' cellpadding='0' cellspacing='0' role='presentation'
        style='font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; box-sizing: border-box; background-color: #fff; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%; direction:rtl;'
        dir='rtl'>
        <tr>
            <td align='center'
                style='font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; box-sizing: border-box;'>
                <table class='content' width='100%' cellpadding='0' cellspacing='0' role='presentation'
                    style='font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; box-sizing: border-box; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;'>
                    <tr>
                        <td class='header'
                            style='font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; box-sizing: border-box; padding: 25px 0; text-align: center;'>
                            <a href='{host}/execute/page/{link}'
                                style='font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; box-sizing: border-box; color: #fff; font-size: 40px; text-decoration: none;'>
                                <img class='hsoub-logo-img'
                                    src='data:image/png;base64,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'
                                    alt='حسوب'
                                    style='font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; box-sizing: border-box; max-width: 100%; max-height: 36px; border: 0; outline: none; text-decoration: none;'></a>
                        </td>
                    </tr>

                    <tr>
                        <td class='body' width='100%' cellpadding='0' cellspacing='0'
                            style='background-color: #fff;border-top: 1px solid #fff;margin: 0;padding: 0;width: 100%;-premailer-cellpadding: 0;-premailer-cellspacing: 0;-premailer-width: 100%;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';box-sizing: border-box;'>
                            <table class='inner-body' align='center' width='570' cellpadding='0' cellspacing='0'
                                role='presentation'
                                style='background-color: #fff;margin: 0 auto;padding: 0;width: 100%;max-width: 570px;-premailer-cellpadding: 0;-premailer-cellspacing: 0;-premailer-width: 100%;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';box-sizing: border-box;'>
                                <!-- Body content -->
                                <tr>
                                    <td class='content-cell'
                                        style='padding: 35px 10px;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';box-sizing: border-box;'>
                                        <h1
                                            style='font-size: 16px;text-align: right;color: #000;line-height: 1.8;margin-bottom: 16px;font-weight: normal;margin-top: 0;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';box-sizing: border-box;'>
                                            مرحبًا #name </h1>
                                        <p
                                            style='line-height: 1.8;text-align: right;color: #262626;font-size: 16px;margin-top: 0;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';box-sizing: border-box;'>
                                            نحن سعداء بانضمامك وبقي خطوة واحدة فقط لتفعيل حسابك. يرجى الضغط على الزر
                                            التالي لتفعيل حسابك لتتمكن بعدها من تسجيل الدخول اليه:</p>

                                        <table class='action' align='center' width='100%' cellpadding='0'
                                            cellspacing='0' role='presentation'
                                            style='font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; box-sizing: border-box; margin: 30px auto; padding: 0; text-align: center; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;'>
                                            <tr>
                                                <td align='center'
                                                    style='font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; box-sizing: border-box;'>
                                                    <table width='100%' border='0' cellpadding='0' cellspacing='0'
                                                        role='presentation'
                                                        style='font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; box-sizing: border-box;'>
                                                        <tr>
                                                            <td align='center'
                                                                style='font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; box-sizing: border-box;'>
                                                                <table border='0' cellpadding='0' cellspacing='0'
                                                                    role='presentation'
                                                                    style='font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; box-sizing: border-box;'>
                                                                    <tr>
                                                                        <td
                                                                            style='font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; box-sizing: border-box;'>
                                                                            <a href='{host}/execute/page/{link}'
                                                                                class='button button-primary'
                                                                                target='_blank'
                                                                                style='font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; box-sizing: border-box; color: #fff; display: inline-block; text-decoration: none; -webkit-text-size-adjust: none; font-size: 16px; background-color: #3490dc; border-top: 10px solid #3490dc; border-right: 18px solid #3490dc; border-bottom: 10px solid #3490dc; border-left: 18px solid #3490dc;'>أكمل
                                                                                التسجيل</a>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <p
                                            style='line-height: 1.8;text-align: right;color: #262626;font-size: 16px;margin-top: 0;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';box-sizing: border-box;'>
                                            وصلتك هذه الرسالة لأنك سجّلت في حسوب. إن لم تنشئ حسابًا أو تظن أن هذه
                                            الرسالة وصلتك بالخطأ بإمكانك تجاهلها.
                                        </p>
                                        <br>
                                        <p
                                            style='line-height: 1.8;text-align: right;color: #262626;font-size: 16px;margin-top: 0;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';box-sizing: border-box;'>
                                            أطيب التحيات، <br />فريق حسوب<br>
                                            <a href='{host}/execute/page/{link}'
                                                style='color: #3869d4;text-decoration: none;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';box-sizing: border-box;'>https://accounts.hsoub.com</a>
                                        </p>
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
