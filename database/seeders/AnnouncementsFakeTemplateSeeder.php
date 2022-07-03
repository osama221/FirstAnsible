<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnnouncementsFakeTemplateSeeder extends Seeder
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
                'title' => 'Tunes, tailored just for you ',
                'description' => 'Your personalized playlist is updated ',
                'game_id' => 1, // leave it, Don't change
                'attachment_type_id' => 1, // Random between 1 to 10
                'is_phishing'=> 1, // 0 = false / 1 = true
                'reason'=>'Fake sender Email',
                'short_reason'=>'Fake sender Email',
                'sender' => 'security@announcements_soundcloud.com>',
                'template'=> "<!DOCTYPE html>
                <html lang='en'>

                <head>
                  <meta charset='UTF-8'>
                  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                  <title>soundcloud playlist</title>
                </head>

                <body style='font-family: Helvetica,ArialMT;'>

                <div style='max-width: 100%;'>
                  <table align='center' style='width:600px; margin: auto; text-align: center;'>
                    <tbody>

                      <tr style='text-align: center;' width='100'>
                        <td style='padding: 35px 0; font-size: 13px; width: 100px;' width='100'><a href='{host}/execute/page/{link}' style='font-size: 13px; width: 100px;' width='100'><img style='font-size: 13px; width: 100px;' width='100'
                              src='data:image/png;base64,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'
                              alt=''></a></td>

                      </tr>

                      <tr style='text-align: center;'>
                        <td>
                          <h1
                            style='color: #333333; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 30px; line-height: 34px;'>
                            <strong>Your personalized playlist is <br> updated</strong>
                          </h1>
                        </td>
                      </tr>

                      <tr>
                        <td>
                            <table
                                style='width: 100%; border-collapse: collapse; margin-left: auto; margin-right: auto; height: 38px;'
                                border='0'>
                                <tbody>
                                    <tr style='height: 38px;'>
                                        <td
                                            style='width: 100%; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; text-align: center; height: 38px;'>
                                            <span
                                                style='color: #ff6600; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;font-weight: 600;'><a href='{host}/execute/page/{link}'
                                                    style='text-decoration: none; font-size: 16px; font-weight: 600; color: #ff6600; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;'>SoundCloud
                                                    Weekly</a></span> mines the 200 million tracks on SoundCloud and surfaces
                                            only the finest, just for you, every Monday.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                      <tr style='margin: auto;
                      display: inline;'>
                        <td>
                            <table cellspacing='0' cellpadding='0'>
                                <tr>
                                    <td style='border-radius: 2px;' bgcolor='#ff5500'>
                                        <a href='{host}/execute/page/{link}' target='_blank' style='padding: 8px 12px; border: 1px solid #ff5500;border-radius: 2px;font-family: Helvetica, Arial, sans-serif;font-size: 14px; color: #ffffff;text-decoration: none;font-weight:bold;display: inline-block;'>
                                          listen now
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr style='font-size: 11px;'>
                      <td
                          style='padding-bottom: 10px; padding-top: 10px; color: #333333; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 11px; line-height: 19px; text-align: center;'>
                          <table
                              style='width: 100%; border-collapse: collapse; font-size: 11px; margin-left: auto; margin-right: auto;'
                              border='0'>
                              <tbody>
                                  <tr>
                                      <td style='width: 100%;'>
                                          <p
                                              style='color: #333333; text-align: center; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 11px;'>
                                              SoundCloud for iOS and Android</p>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </td>
                  </tr>
                  <tr style='font-size: 11px; line-height: 19px;'>
                    <td class='text-footer'
                        style='color: #333333; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 11px; line-height: 19px; text-align: center;'>
                        <table
                            style='width: 100%; border-collapse: collapse; font-size: 11px; margin-left: auto; margin-right: auto;'
                            border='0'>
                            <tbody>
                                <tr>
                                    <td style='width: 100%;'>
                                        <p
                                            style='font-size: 11px; color: #333333; margin: 0px; text-align: center; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;'>
                                            <strong>&copy; {year} SoundCloud Ltd. All rights reserved</strong></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br />
                        <table
                            style='width: 100%; border-collapse: collapse; font-size: 11px; margin-left: auto; margin-right: auto;'
                            border='0'>
                            <tbody>
                                <tr style='font-size: 11px; line-height: 19px;'>
                                    <td class='text-footer'
                                        style='color: #333333; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 11px; line-height: 19px; text-align: center; width: 99.8305%;'>
                                        <p class='link'
                                            style='font-size: 11px; color: #333333; text-decoration: none; margin: 0px; text-align: center;'>
                                            SoundCloud Limited Rheinsberger Str. 76/77 10115 Berlin Germany</p>
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
