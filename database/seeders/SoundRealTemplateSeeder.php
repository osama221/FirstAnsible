<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SoundRealTemplateSeeder extends Seeder
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
                'title' => 'How to get started on SoundCloud',
                'description' => 'You’ve just joined the millions of SoundCloud users who are creating and surfacing new tunes every day.',
                'game_id' => 1, // leave it, Don't change
                'attachment_type_id' => null, // Random between 1 to 10
                'is_phishing'=> 0, // 0 = false / 1 = true
                'reason'=>'real sender Email',
                'short_reason'=>'real sender Email',
                'sender' => 'security@soundcloud.com',
                'template'=> "
                <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
                <html xmlns='http://www.w3.org/1999/xhtml' lang='en'>

                <head>
                    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>soundcloud</title>
                    <style type='text/css'>

                    img {
                      outline:none;
                      text-decoration:none;
                      -ms-interpolation-mode: bicubic;
                      border: 0px none;
                    }

                    a img { border:none; }

                    table td {border-collapse:collapse;}

                    h1, h2, h3, h4, h5, h6 {
                     color: #333333;
                     line-height: 100%;
                    }

                    body {
                      padding: 0 !important;
                      margin: 0 !important;
                    }

                    body, .content {
                      font-family: 'LucidaGrande', Helvetica, Arial, sans-serif;
                      font-weight: normal;
                      color: #333333;
                    }

                    .preheader {
                      color: white;
                      display: none;
                    }

                    .centeredImage {
                      margin: 0 auto 10px;
                    }

                    a {
                      color: #ff5500;
                      text-decoration: none;
                    }

                    @media only screen and (max-width: 540px) {
                      body[mail] .content {
                        width: 100% !important;
                        max-width: 520px;
                      }

                      body[mail] .bigImage {
                        width: 100% !important;
                        height: auto !important;
                      }
                    }

                    @media only screen and (max-width: 450px) {
                      body[mail] .current_logo {
                        margin: 0 auto;
                        width: 56px !important;
                        height: 56px !important;
                      }

                      body[mail] .logoText {
                        padding: 10px 0 0 0 !important;
                        text-align: center;
                      }

                      body[mail] td.columnSingle {
                        display:block !important; width:100% !important;
                      }

                      body[mail] td.iconBulletText {
                        font-size: 14px !important;
                        line-height: 18px !important;
                      }

                      body[mail] .welcomeHeading {
                        font-size: 24px !important;
                        padding-bottom: 0px !important;
                        line-height: 30px !important;
                      }

                      body[mail] .welcomeSubHeading {
                        font-size: 12px !important;
                        line-height: 16px !important;
                      }

                      body[mail] .centerOnMobile {
                        text-align: center;
                      }

                      body[mail] .horizontalSpacer.columnSingle {
                        width: 100% !important;
                        height: 30px !important;
                      }

                      body[mail] .hideOnMobile {
                        display: none !important;
                        width: 0;
                        height: 0;
                        overflow: hidden;
                      }
                    }

                    @media only screen and (max-width: 350px) {
                      body[mail] .tag, .tagColumn {
                        display: none;
                      }
                      body[mail] .tagColumn {
                        width: 0px;
                      }
                    }

                    </style>
                </head>

                <body style='font-family: 'LucidaGrande', Helvetica, Arial, sans-serif; background-color: white; color: #444;' mail='attribute for yahoo fixes'>
                <div style='max-width: 100%;'>
                    <center>
                        <table cellpadding='0' cellspacing='0' border='0' align='center' width='520' style='background-color:white; table-layout: fixed; padding:10px; font-family:'LucidaGrande', Helvetica, Arial, sans-serif; color:#333333; font-weight: normal; text-align: left;' class='content'>
                            <tr>
                                <td colspan='2' style='padding: 0 0 0;'>
                                    <div style='height: 16px; line-height: 16px; font-size: 16px;'>&nbsp;</div>
                                </td>
                            </tr>
                <tr>
                    <td colspan='2'>
                        <table cellpadding='0' cellspacing='0' border='0' width='100%'>
                            <tr>
                                <td width='133' valign='top' class='columnSingle'>
                                    <a href='https://soundcloud.com/' style='color: rgb(0, 102, 204); text-decoration: none; border: 0px none;'><img src='data:image/png;base64,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' alt=' ' style='width:113px; height:113px; display:block; border: 0px none;' border='0' class='current_logo' /></a>
                                </td>
                                <td style='padding-top: 0px; font-size:28px;' valign='middle' class='logoText columnSingle'>
                                    <div style='font-family: 'LucidaGrande', Helvetica, Arial, sans-serif; line-height: 26px; font-weight:normal; margin-bottom:0px; margin-top:0px;'>Welcome to a whole new world of sound discovery</div>
                                    <p style='color: #333333; margin-top: 8px; margin-bottom: 8px; font-size: 16px;line-height: 22px; font-family: 'LucidaGrande', Helvetica, Arial, sans-serif;'></p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td colspan='2' style='padding: 15px 0 5px;'>
                        <h2 style='font-family: Helvetica, Arial, sans-serif; font-weight: normal; font-size: 18px; line-height: 24px; color: #333333; margin: 0'>You’ve just joined the millions of SoundCloud users who are creating and surfacing new tunes every day. From the biggest names to emerging artists; from old favorites to completely fresh tracks, get ready to hear sounds from the whole world.</h2>
                    </td>
                </tr>
                <tr>
                    <td colspan='2' style='padding: 15px 0 5px;'>
                        <h2 style='font-family:Helvetica, Arial, sans-serif; font-weight: normal; font-size: 18px; line-height: 24px; color: #333333; margin: 0'><strong>Find and follow creators you already love</strong></h2>
                    </td>
                </tr>
                <tr>
                    <td colspan='2' style='padding: 0 0 15px;'>
                        <p style='font-size: 14px; line-height: 21px; margin: 0;'>Follow to hear their newest songs and podcasts as soon as they're posted.</p>
                    </td>
                </tr>
                <tr>
                    <td colspan='2' style='padding: 0 0 0;'>
                        <div style='height: 16px; line-height: 16px; font-size: 16px;'>&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td colspan='2' style='padding: 0 0 15px;'>
                        <a href='https://soundcloud.com/' target='_blank' style='white-space: nowrap; color:white; background-color: #ff4600; text-decoration:none; font-weight:normal; font-size: 16px; padding-top: 10px; padding-bottom:10px; padding-left:20px; padding-right:20px; border-radius:4px; text-shadow: 0 1px 0 #802F00; border: 1px solid #B33212; display: inline-block; background-color: #F76700; background-image: -webkit-linear-gradient(top, #F76700, #FA3219); background-image: -moz-linear-gradient(top, #F76700, #FA3219); background-image: -o-linear-gradient(top, #F76700, #FA3219); background-image: linear-gradient(to bottom, #F76700, #FA3219);' class='action_call'>Search artists now</a>
                    </td>
                </tr>

                            <tr>
                                <td colspan='2' style='padding: 0 0 0;'>
                                    <div style='font-size: 11px; color: #999999; line-height: 16px;'>&copy; 15/9/2021 SoundCloud Ltd. All rights reserved

                                        <br />SoundCloud Limited Rheinsberger Str. 76/77 10115 Berlin Germany
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </center>
                    </div>
                </body>

                </html>
                "
                ];
                 $template_to_upload = \App\Models\PhishingTemplate::updateOrCreate($template);
    }
}
