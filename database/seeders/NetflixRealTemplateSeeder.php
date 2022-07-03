<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NetflixRealTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $template = [
                'language' => 'en', // en or ar
                'title' => 'start watching today',
                'description' => 'Welcome to Netflix! We’re excited to have you',
                'game_id' => 1, // leave it, Don't change
                'attachment_type_id' => null, // Random between 1 to 10
                'is_phishing'=> 0, // 0 = false / 1 = true
                'reason'=>'trusted sender',
                'short_reason'=>'trusted sender',
                'sender' => 'security@netflix.com',
                'template'=> "<!DOCTYPE html>
<html>

<head>
    <meta http-equiv='Content-Type' content='text/html charset=utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <title>Netflix</title>
   
</head>

<body class='body' style='
      margin-top: 0;
      padding: 0;
      margin: 0;
      background-color: rgb(234, 234, 234);
    '>
    <div style='max-width: 100%;'>
    <table class='container-table -important' width='100%' cellpadding='0' cellspacing='0' border='0'
        style='border-spacing: 0; background-color: rgb(234, 234, 234)'>
        <tbody>
            <tr>
                <td class='container' align='center' style='margin-top: 0; background-color: rgb(234, 234, 234)'>
                    <table class='content-shell-table' width='500' cellpadding='0' cellspacing='0' border='0'
                        style='border-spacing: 0; background-color: rgb(255, 255, 255)'>
                        <tbody>
                            <tr>
                                <td class='content-shell' align='center'>
                                    <table class='gem-element-nflxLogo' width='100%' cellpadding='0' cellspacing='0'
                                        border='0' style='border-spacing: 0'>
                                        <tbody>
                                            <tr>
                                                <td class='content-padding' style='
                              padding-top: 20px;
                              padding-left: 40px;
                              padding-right: 40px;
                            ' align='left'>
                                                    <a href='https://www.netflix.com/eg-en/' target='_blank'
                                                        style='color: inherit'>
                                                        <img alt='Netflix'
                                                            src='data:image/png;base64,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'
                                                            width='24' border='0' style='
                                  display: block;
                                  -ms-interpolation-mode: bicubic;
                                  border: none;
                                  outline: none;
                                  border-collapse: collapse;
                                  display: block;
                                  border-style: none;
                                ' />
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class='gem-copy-table' align='left' width='100%'
                                        style='width: 100%; border-spacing: 0' cellpadding='0' cellspacing='0'
                                        border='0'>
                                        <tbody>
                                            <tr>
                                                <td class='gem-copy content-padding gem-h1' align='left' style='
                              padding-top: 20px;
                              color: #221f1f;
                              font-family: NetflixSans-Bold, Helvetica, Roboto,
                                Segoe UI, sans-serif;
                              font-weight: 700;
                              padding-left: 40px;
                              padding-right: 40px;
                              font-size: 36px;
                              line-height: 42px;
                              letter-spacing: -1px;
                            '>
                                                    Finish signing up to watch
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class='gem-copy-table' align='left' width='100%'
                                        style='width: 100%; border-spacing: 0' cellpadding='0' cellspacing='0'
                                        border='0'>
                                        <tbody>
                                            <tr>
                                                <td class='gem-copy content-padding gem-p' align='left' style='
                              padding-top: 20px;
                              color: #221f1f;
                              padding-left: 40px;
                              padding-right: 40px;
                              font-family: NetflixSans-Light, Helvetica, Roboto,
                                Segoe UI, sans-serif;
                              font-weight: 300;
                              font-size: 16px;
                              line-height: 21px;
                              font-size: 16px;
                              line-height: 21px;
                            '>
                                                    Hey #name ,
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class='gem-copy-table' align='left' width='100%'
                                        style='width: 100%; border-spacing: 0' cellpadding='0' cellspacing='0'
                                        border='0'>
                                        <tbody>
                                            <tr>
                                                <td class='gem-copy content-padding gem-p' align='left' style='
                              padding-top: 20px;
                              color: #221f1f;
                              padding-left: 40px;
                              padding-right: 40px;
                              font-family: NetflixSans-Light, Helvetica, Roboto,
                                Segoe UI, sans-serif;
                              font-weight: 300;
                              font-size: 16px;
                              line-height: 21px;
                              font-size: 16px;
                              line-height: 21px;
                            '>
                                                    Welcome to Netflix! We’re excited to have you.
                                                    Finish signing up to watch today’s hottest TV shows
                                                    &amp; movies.
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class='gem-single-button-shell button-mobile-flex' width='100%'
                                        align='center' cellpadding='0' cellspacing='0' border='0'
                                        style='border-spacing: 0'>
                                        <tbody>
                                            <tr>
                                                <td class='
                              gem-single-button
                              button-1-shell
                              content-padding
                            ' style='
                              padding-top: 20px;
                              padding-left: 40px;
                              padding-right: 40px;
                            ' align='center'>
                                                    <table class='gem-single-button button-1-table' cellpadding='0'
                                                        cellspacing='0' border='0'
                                                        style='border-spacing: 0; width: 100%'>
                                                        <tbody>
                                                            <tr>
                                                                <td class='
                                      gem-single-button
                                      button-1-text
                                      gem-h5
                                      button-text-light
                                    ' style='
                                      background-color: #e50914;
                                      border: solid 1px #e50914;
                                      font-family: NetflixSans-Bold, Helvetica,
                                        Roboto, Segoe UI, sans-serif;
                                      font-weight: 700;
                                      color: rgb(255, 255, 255);
                                      -webkit-border-radius: 4px;
                                      border-radius: 4px;
                                      text-decoration: none;
                                      text-align: center;
                                      padding: 13px 0 13px 0;
                                      width: 100%;
                                      font-size: 14px;
                                      line-height: 17px;
                                      letter-spacing: -0.2px;
                                    '>
                                                                    <a class='
                                        gem-single-button gem-filled-button-a
                                        button-text-light
                                        gem-h5
                                      ' href='https://www.netflix.com/eg-en/login' style='
                                        text-decoration: none;
                                        display: block;
                                        padding-left: 20px;
                                        padding-right: 20px;
                                        font-family: NetflixSans-Bold, Helvetica,
                                          Roboto, Segoe UI, sans-serif;
                                        font-weight: 700;
                                        color: inherit;
                                        color: rgb(255, 255, 255);
                                        font-size: 14px;
                                        line-height: 17px;
                                        letter-spacing: -0.2px;
                                      '>Finish Signing Up</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table width='100%' cellpadding='0' cellspacing='0' border='0'
                                        style='border-spacing: 0'>
                                        <tbody>
                                            <tr>
                                                <td class='content-padding gem-icon-bullet' style='
                              padding-top: 20px;
                              padding-left: 40px;
                              padding-right: 40px;
                            '>
                                                    <table width='100%' cellpadding='0' cellspacing='0' border='0'
                                                        style='border-spacing: 0'>
                                                        <tbody>
                                                            <tr>
                                                                <td class='icon type' valign='top' align='left'
                                                                    width='1%' style='width: 1%; padding-right: 12px'>
                                                                    <table cellpadding='0' cellspacing='0' border='0'
                                                                        width='36' height='36'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td valign='middle' align='center'>
                                                                                    <img class='image-icon-thumbsUp'
                                                                                        src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAA0CAYAAAD8H6qwAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAPbSURBVHgB1VlBVpxAEK3BcWu4QfAG3EBe1mrYu5CcYMZcYPAEGU+gc4FkRt1nvICSE4TsfU98bnShk18K80jTQEP3OOS/x6MpupvfRVVR1RD9J+iRBnzfd5+fn11uLxaLpN/vR9PpNKYVoDFRkLNfXl4GaA5x2OJ9ED7b2Ng4Nk24EdHd3V3PsqwfJCEoIMFivlxeXk7JEKwmnXu9nkP1JBk2L4gXRobQhqj65JZ16nmeysLq5yJNgPwZvdnrRHLb2draGpIBNCVa0A68fnJ+fn6CI4AjHUnGDMgAtIkiJCVZ++LiYgyyc3GMCVttRBQkPkjEiXA9EzvAPFzShLZGxXiJGFoISVigQ5rQdiYRskAP73dIE7rhKSnpGgvXH0kTuhpNFOXasVSZKL7xjvhA2F4s6yuRO6QJZaL4dh+SomZgIvdkGEpEU20GohyaOyZF6H5KlYim2nTyMg7syI7mJUNiUTCfz8vsWQm1RE1o0wRqibbQJsNIxpRHv+omaxNEA1GuoE1bNlfVgLqKoJJoS22WzfW76v7+/j6fIvS7QqIzFomXvnod2yxJXlTg4nM74EWB+Ch/o5Qo8kyf2mvThI2Ge3t7y6S7lCiCdiHhfW9PB4dvmW0XbBQ3PGiT1e4ItyJV28QD/kgS6LoxnLMW3kTqzGE/R5Dr9RGOIQbJ5hqTIrgsoRaAXYY4jQTxa9JtpR0GqVeWFWIxHj6hFQPPCEnIvDLHtGCwP+lNW2UOwJsJR/R+mMmEFl6zVzYCBE8QLrZN7njUQRLakiAI5AGfHYE9vE1g14VYCOLav7299WREZyh7fVoTWEEgd5qX4XpUiKMQ3tEaASWd4RTlZaxl41WoIfwSru3OEQ3DUJordIooe3cURdvsQHk5O3eniCZJ4iEkfhflvGPYpw4BJFmTriAbI0xOumajhQ03kHz9KnbV61+RD5WdIXpwcMBOs5OXId1cbmSs3UY5HMHT6eHhYSjmHcgzbrL22omCZFbpinloDKJX2UUXXj070Egin+Qr0YJGYScBEmkX5wjHDKXrHAO0tmOq4Lpucn19HdO/pc9xmkQvUaZRF/YS8E8tzvyRXJ/WbSC0BV69TcVqNxb7qdiozaTZjkB4ivYUC5g11TIWWpBtbm72np6eCuVPW6JLpN9gH6S5zmLTiCHjTOcO7fuqP3s8RsTj4+OOrMKAucUFGQ6u1VlrHzGZXVa2SuCmff10EdQUJWNuZPtQ0p5sjwi2HpqHVTXVCrCAsj7JSqBaNaS/vgM0D2m1YPP5mmb4BSi/r0zLIP0ZE3pUbx4LUgM75QTznlRtPf4FBlDYSjbMw8MAAAAASUVORK5CYII='
                                                                                        height='26' border='0' style='
                                                display: inline;
                                                height: 26px;
                                                -ms-interpolation-mode: bicubic;
                                                border: none;
                                                outline: none;
                                                border-collapse: collapse;
                                                display: block;
                                              ' />
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td align='left' class='text' valign='top' width='99%'
                                                                    style='width: 99%'>
                                                                    <table class='gem-copy-table' align='left'
                                                                        style='width: 100%; border-spacing: 0'
                                                                        cellpadding='0' cellspacing='0' border='0'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class='gem-copy gem-p _none'
                                                                                    align='left' style='
                                              padding-top: 0;
                                              color: #221f1f;
                                              font-family: NetflixSans-Light,
                                                Helvetica, Roboto, Segoe UI,
                                                sans-serif;
                                              font-weight: 300;
                                              font-size: 16px;
                                              line-height: 21px;
                                              font-size: 16px;
                                              line-height: 21px;
                                            '>
                                                                                    <b style='
                                                font-family: NetflixSans-Bold,
                                                  Helvetica, Roboto, Segoe UI,
                                                  sans-serif;
                                                font-weight: 700;
                                              '>Recommendations just for you.</b><br />Always find the right TV show
                                                                                    or movie based on what you like.
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class='gem-copy-table' align='left' width='100%'
                                        style='width: 100%; border-spacing: 0' cellpadding='0' cellspacing='0'
                                        border='0'>
                                        <tbody>
                                            <tr>
                                                <td class='gem-copy content-padding gem-p' align='left' style='
                              padding-top: 20px;
                              color: #221f1f;
                              padding-left: 40px;
                              padding-right: 40px;
                              font-family: NetflixSans-Light, Helvetica, Roboto,
                                Segoe UI, sans-serif;
                              font-weight: 300;
                              font-size: 16px;
                              line-height: 21px;
                              font-size: 16px;
                              line-height: 21px;
                            '>
                                                    We're here to help if you need it. Visit the
                                                    <a href='https://www.netflix.com/eg-en/'
                                                        style='text-decoration: underline; color: inherit'>Help
                                                        Center</a>
                                                    for more info or
                                                    <a href='https://www.netflix.com/eg-en/'
                                                        style='text-decoration: underline; color: inherit'>contact
                                                        us</a>.
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class='gem-copy-table' align='left' width='100%'
                                        style='width: 100%; border-spacing: 0' cellpadding='0' cellspacing='0'
                                        border='0'>
                                        <tbody>
                                            <tr>
                                                <td class='gem-copy content-padding gem-h5 medium' align='left' style='
                              padding-top: 20px;
                              color: #221f1f;
                              font-family: NetflixSans-Bold, Helvetica, Roboto,
                                Segoe UI, sans-serif;
                              font-weight: 700;
                              padding-left: 40px;
                              padding-right: 40px;
                              font-size: 14px;
                              line-height: 17px;
                              letter-spacing: -0.2px;
                              font-family: NetflixSans-Medium, Helvetica, Roboto,
                                Segoe UI, sans-serif;
                              font-weight: 500;
                            '>
                                                    The Netflix team <br />
                                                    <br />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- End Spacer -->
                                    <table class='gem-divider' width='100%' cellpadding='0' cellspacing='0' border='0'
                                        style='border-spacing: 0'>
                                        <tbody>
                                            <tr>
                                                <td class='content-padding' style='
                              padding-top: 0;
                              padding-left: 40px;
                              padding-right: 40px;
                            '>
                                                    <table align='left' width='100%' cellpadding='0' cellspacing='0'
                                                        border='0' style='border-spacing: 0'>
                                                        <tbody>
                                                            <tr>
                                                                <td class='empty' style='
                                      border-top: 2px solid #221f1f;
                                      font-size: 0;
                                      line-height: 0;
                                    '>
                                                                    &nbsp;
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table bgcolor='#FFFFFF' width='100%' cellpadding='0' cellspacing='0' border='0'
                                        style='border-spacing: 0'>
                                        <tbody>
                                            <tr>
                                                <td class='content-padding' style='
                              padding-top: 40px;
                              padding-left: 40px;
                              padding-right: 40px;
                            '>
                                                    <table width='100%' cellpadding='0' cellspacing='0' border='0'
                                                        style='border-spacing: 0'>
                                                        <tbody>
                                                            <tr>

                                                                <td>
                                                                    <table class='footer-shell' width='100%'
                                                                        valign='top' cellpadding='0' cellspacing='0'
                                                                        border='0' style='border-spacing: 0'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class='gem-p1 questions' style='
                                              font-family: NetflixSans-Medium,
                                                Helvetica, Roboto, Segoe UI,
                                                sans-serif;
                                              font-weight: 500;
                                              font-size: 14px;
                                              line-height: 18px;
                                              letter-spacing: -0.25px;
                                              font-family: NetflixSans-Light,
                                                Helvetica, Roboto, Segoe UI,
                                                sans-serif;
                                              font-weight: 300;
                                              color: rgb(164, 164, 164);
                                            '>
                                                                                    Questions? Visit the
                                                                                    <a href='https://www.netflix.com/eg-en/'
                                                                                        style='
                                                color: rgb(164, 164, 164);
                                                color: inherit;
                                              '><span class='footer-link-bold'>Help Center</span></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class='gem-legal address' style='
                                              font-size: 11px;
                                              line-height: 14px;
                                              letter-spacing: -0.1px;
                                              font-family: NetflixSans-Light,
                                                Helvetica, Roboto, Segoe UI,
                                                sans-serif;
                                              font-weight: 300;
                                              color: rgb(164, 164, 164);
                                              text-decoration: none;
                                              cursor: text;
                                              color: rgb(164, 164, 164);
                                              padding-bottom: 20px;
                                            '>
                                                                                    <span class='hide-link' style='
                                                text-decoration: none;
                                                cursor: text;
                                                color: rgb(164, 164, 164);
                                              '><a href='https://www.netflix.com/eg-en/' style='
                                                  text-decoration: none;
                                                  cursor: pointer;
                                                  text-decoration: underline;
                                                  color: rgb(164, 164, 164);
                                                  color: inherit;
                                                '>‪Netflix International B.V.‬</a>
                                                                                        <br />
                                                                                        <br /></span>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
</body>

</html>"
                ];


                $template_to_upload = \App\Models\PhishingTemplate::updateOrCreate($template);
    }
}
