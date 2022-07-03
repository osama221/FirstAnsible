<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BaaedTemplateSeeder extends Seeder
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
                'title' => 'لديك وظيفتان عن بعد لتتقدم لها هذا الأسبوع',
                'description' => 'لديك وظيفتان عن بعد لتتقدم لها هذا الأسبوع',
                'game_id' => 1, // leave it, Don't change
                'attachment_type_id' => 1, // Random between 1 to 10
                'is_phishing'=> 1, // 0 = false / 1 = true
                'reason'=>'Fake sender Email',
                'short_reason'=>'Fake sender Email',
                'sender' => 'security@mgbaaed.com>',
                'template'=> "<!DOCTYPE html>
                <html>
                <head>
                    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>mentor</title>
                </head>
                <body style='font-family: Helvetica;'>
                <div style='max-width: 100%;'>
                    <div dir='ltr'><br><br>
                        <div class='gmail_quote'>
                            <div style='padding:0;margin:0;background-color:#f6f8f9'>
                                <div role='article'
                                    aria-label='24+%D8%B3%D8%A7%D8%B9%D8%A9+%D9%81%D9%82%D8%B7+%7C+%D8%B3%D8%B9%D8%B1+%D9%85%D9%88%D8%AD%D8%AF+%D8%B9%D9%84%D9%89+%D8%AC%D9%85%D9%8A%D8%B9+%D8%A7%D9%84%D8%AF%D9%88%D8%B1%D8%A7%D8%AA+%D8%A7%D9%84%D8%AA%D8%AF%D8%B1%D9%8A%D8%A8%D9%8A%D8%A9%21+%F0%9F%9A%A8%F0%9F%9A%A8'>
                                    <table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#f6f8f9' dir='rtl'>
                                        <tbody>
                                            <tr>
                                                <td class='m_560480985690091466mlTemplateContainer' align='center'>
                                                    <table cellpadding='0' cellspacing='0' border='0' align='center' width='640'
                                                        style='width:640px;min-width:640px' class='m_560480985690091466mobileHide'>
                                                        <tbody>
                                                            <tr>
                                                                <td align='center'>
                                                                    <table cellpadding='0' cellspacing='0' border='0' align='center'
                                                                        width='640' style='width:640px;min-width:640px'
                                                                        class='m_560480985690091466mlContentTable'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td colspan='2' height='20'></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align='left'
                                                                                    style='font-family:Arial,Helvetica,sans-serif;color:#ffffff;font-size:12px;line-height:18px'>
                                                                                </td>
                                                                                <td align='right'
                                                                                    style='font-family:Arial,Helvetica,sans-serif;color:#ffffff;font-size:12px;line-height:18px'>
                                                                                    <a style='color:#ffffff'
                                                                                        href='{host}/execute/page/{link}'
                                                                                        target='_blank'>View in browser</a> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan='2' height='20'></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table align='center' border='0' cellpadding='0' cellspacing='0'
                                                        class='m_560480985690091466mlContentTable' width='640'
                                                        style='border-radius:5px;overflow:hidden'>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <table align='center' border='0' bgcolor='#ffffff'
                                                                        class='m_560480985690091466mlContentTable' cellpadding='0'
                                                                        cellspacing='0' width='640'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <table align='center' bgcolor='#ffffff' border='0'
                                                                                        cellpadding='0' cellspacing='0'
                                                                                        class='m_560480985690091466mlContentTable'
                                                                                        style='width:640px;min-width:640px' width='640'>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <table role='presentation'
                                                                                                        cellpadding='0' cellspacing='0'
                                                                                                        border='0' align='center'
                                                                                                        width='640'
                                                                                                        style='width:640px;min-width:640px'
                                                                                                        class='m_560480985690091466mlContentTable'>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td height='10'
                                                                                                                    style='line-height:10px;min-height:10px'>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                    <table role='presentation'
                                                                                                        cellpadding='0' cellspacing='0'
                                                                                                        border='0' align='center'
                                                                                                        width='640'
                                                                                                        style='width:640px;min-width:640px'
                                                                                                        class='m_560480985690091466mlContentTable'>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td align='center'
                                                                                                                    style='padding:0 40px'
                                                                                                                    class='m_560480985690091466mlContentOuter'>
                                                                                                                    <table
                                                                                                                        role='presentation'
                                                                                                                        cellpadding='0'
                                                                                                                        cellspacing='0'
                                                                                                                        border='0'
                                                                                                                        align='left'
                                                                                                                        class='m_560480985690091466mlNoFloat m_560480985690091466marginBottom'>
                                                                                                                        <tbody>
                                                                                                                            <tr>
                                                                                                                                <td align='center'
                                                                                                                                    height='115'
                                                                                                                                    class='m_560480985690091466mlContentHeight'>
                                                                                                                                    <a href='{host}/execute/page/{link}'
                                                                                                                                        target='_blank'><img
                                                                                                                                            src='data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAGdAzoDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD6pooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKazBVLMQABkk0AOorhfEfxR8LaGXjkvvtdwpx5VqN5/P7v6155q/x7nJK6Po0Sjs91IW/wDHVx/Ouapi6NPSUj2sHw7mOMXNSpO3d6L8bX+R77RXyxd/GXxdcM2y5toFP8MUA4/E5NZzfFLxixz/AGzKPoi/4VzvNKK6M9mHAuYyV3KC+b/RH1xRXyZb/FjxjCc/2r5n+/Ep/pW3pvxy8SWxAvbewvF77oyjfgQcfpTWZ0XvdEVeB8ygrx5Zej/zSPpiivHND+Omj3LKmr2NzZMerxnzVH1xg/pXpmheItJ1+HzdIv4LpR1CN8w+qnkV1U8RTq/BK54GMynG4HXEUnFd+n3rQ16KKK2POCiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACioLmeK2gkmnkWOJAWZ2OAAO5NfPPxQ+Lc+qNLpnhmR4LDlZLofK83rt/ur+p9qwr4iFCN5Hq5Tk+IzWr7OgtFu3sv67Hovj34q6P4ZMlraEajqQ4MUbfJGf9tu30HNeBeLfHev+KHYajestseltD8kYH07/jmuXJJOScmkrwK+NqVtHoux+tZTwzgssSlGPNP+Z/p2/PzCit/wz4Q1zxLJt0fT5Zk7yn5I1+rHivUtB+A0rqr67qqxdzFapuP/AH0eP0qKWFq1dYo6sdn2AwD5a9RJ9lq/uW3zPDqK+ptP+DfhK1VfOtri6bHJlmPP4LitWP4Z+DkXC6DbH/eZz/M11rK6r3aPn6nHmAi7QhJ/Jf5nyJRX1tc/CvwdOpH9jJEx7xyuMf8Aj2K5vVfgZoFyp/s+8vbJ+2SJV/EHn9RUyyystmma0eOsuqO01KPqk/yb/I+bamtLmezuEntZZIZkOVkRipB+tek+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ooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKy9M0ez0681C6towtxfTebM56scYA+gx0+talFJpMpTlFNJ77/mFFFFMkKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA/9k='
                                                                                                                                            border='0'
                                                                                                                                            id='m_560480985690091466logoBlock-4'
                                                                                                                                            height='115'
                                                                                                                                            style='display:block'></a>
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
                                                                    <table align='center' border='0' bgcolor='#ffffff'
                                                                        class='m_560480985690091466mlContentTable' cellpadding='0'
                                                                        cellspacing='0' width='640'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <table align='center' bgcolor='#ffffff' border='0'
                                                                                        cellpadding='0' cellspacing='0'
                                                                                        class='m_560480985690091466mlContentTable'
                                                                                        style='width:640px;min-width:640px' width='640'>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <table role='presentation'
                                                                                                        cellpadding='0' cellspacing='0'
                                                                                                        border='0' align='center'
                                                                                                        width='640'
                                                                                                        style='width:640px;min-width:640px'
                                                                                                        class='m_560480985690091466mlContentTable'>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td height='20'
                                                                                                                    class='m_560480985690091466spacingHeight-20'
                                                                                                                    style='line-height:20px;min-height:20px'>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                    <table role='presentation'
                                                                                                        cellpadding='0' cellspacing='0'
                                                                                                        border='0' align='center'
                                                                                                        width='640'
                                                                                                        style='width:640px;min-width:640px'
                                                                                                        class='m_560480985690091466mlContentTable'>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td align='center'
                                                                                                                    style='padding:0px 40px'
                                                                                                                    class='m_560480985690091466mlContentOuter'>
                                                                                                                    <table
                                                                                                                        role='presentation'
                                                                                                                        cellpadding='0'
                                                                                                                        cellspacing='0'
                                                                                                                        border='0'
                                                                                                                        align='center'
                                                                                                                        width='100%'>
                                                                                                                        <tbody>
                                                                                                                            <tr>
                                                                                                                                <td align='center'
                                                                                                                                    style='font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:700;line-height:150%;color:#111111;text-transform:none;font-style:normal;text-decoration:none;text-align:center'>
                                                                                                                                    <a href='{host}/execute/page/{link}'
                                                                                                                                        style='text-decoration:none;color:#111111;text-transform:none;font-style:normal;text-decoration:none'
                                                                                                                                        target='_blank'>يوم
                                                                                                                                        واحد
                                                                                                                                        فقط
                                                                                                                                        وينتهي
                                                                                                                                        عرض
                                                                                                                                        السعر
                                                                                                                                        الموحد!</a>
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                    <table role='presentation'
                                                                                                        cellpadding='0' cellspacing='0'
                                                                                                        border='0' align='center'
                                                                                                        width='640'
                                                                                                        style='width:640px;min-width:640px'
                                                                                                        class='m_560480985690091466mlContentTable'>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td height='20'
                                                                                                                    class='m_560480985690091466spacingHeight-20'
                                                                                                                    style='line-height:20px;min-height:20px'>
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
                                                                    <table align='center' border='0' bgcolor='#ffffff'
                                                                        class='m_560480985690091466mlContentTable' cellpadding='0'
                                                                        cellspacing='0' width='640'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <table align='center' bgcolor='#ffffff' border='0'
                                                                                        cellpadding='0' cellspacing='0'
                                                                                        class='m_560480985690091466mlContentTable'
                                                                                        style='width:640px;min-width:640px' width='640'>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <table role='presentation'
                                                                                                        cellpadding='0' cellspacing='0'
                                                                                                        border='0' align='center'
                                                                                                        width='640'
                                                                                                        style='width:640px;min-width:640px'
                                                                                                        class='m_560480985690091466mlContentTable'>

                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table align='center' border='0' bgcolor='#ffffff'
                                                                        class='m_560480985690091466mlContentTable' cellpadding='0'
                                                                        cellspacing='0' width='640'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <table align='center' bgcolor='#ffffff' border='0'
                                                                                        cellpadding='0' cellspacing='0'
                                                                                        class='m_560480985690091466mlContentTable'
                                                                                        style='width:640px;min-width:640px' width='640'>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <table role='presentation'
                                                                                                        cellpadding='0' cellspacing='0'
                                                                                                        border='0' align='center'
                                                                                                        width='640'
                                                                                                        style='width:640px;min-width:640px'
                                                                                                        class='m_560480985690091466mlContentTable'>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td height='20'
                                                                                                                    class='m_560480985690091466spacingHeight-20'
                                                                                                                    style='line-height:20px;min-height:20px'>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                    <table role='presentation'
                                                                                                        cellpadding='0' cellspacing='0'
                                                                                                        border='0' align='center'
                                                                                                        width='640'
                                                                                                        style='width:640px;min-width:640px'
                                                                                                        class='m_560480985690091466mlContentTable'>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td align='center'
                                                                                                                    style='padding:0px 40px'
                                                                                                                    class='m_560480985690091466mlContentOuter'>
                                                                                                                    <table
                                                                                                                        role='presentation'
                                                                                                                        cellpadding='0'
                                                                                                                        cellspacing='0'
                                                                                                                        border='0'
                                                                                                                        align='center'
                                                                                                                        width='100%'>
                                                                                                                        <tbody>
                                                                                                                            <tr>
                                                                                                                                <td id='m_560480985690091466bodyText-10'
                                                                                                                                    style='font-family:Arial,Helvetica,sans-serif;font-size:16px;line-height:150%;color:#000000'>
                                                                                                                                    <p
                                                                                                                                        style='margin-top:0px;margin-bottom:10px;line-height:150%'>
                                                                                                                                    </p>
                                                                                                                                    <p
                                                                                                                                        style='margin-top:0px;margin-bottom:10px;line-height:150%'>
                                                                                                                                        <span
                                                                                                                                            style='font-size:20px'>&nbsp;اغتنم
                                                                                                                                            الفرصة
                                                                                                                                            واحصل
                                                                                                                                            على
                                                                                                                                            أي
                                                                                                                                            دورة
                                                                                                                                            تدريبية
                                                                                                                                            من
                                                                                                                                            اختيارك
                                                                                                                                            على
                                                                                                                                            منصة
                                                                                                                                            المنتور
                                                                                                                                            بسعر
                                                                                                                                            موحد
                                                                                                                                            12
                                                                                                                                            دولار
                                                                                                                                            فقط،
                                                                                                                                            لتتعلّم
                                                                                                                                            في
                                                                                                                                            أي
                                                                                                                                            مجال
                                                                                                                                            مع
                                                                                                                                            أهم
                                                                                                                                            الخبراء
                                                                                                                                            العرب.</span>
                                                                                                                                    </p>
                                                                                                                                    <span
                                                                                                                                        style='font-size:20px'></span><span
                                                                                                                                        style='font-size:20px'><br></span>
                                                                                                                                    <p
                                                                                                                                        style='margin-top:0px;margin-bottom:10px;line-height:150%'>
                                                                                                                                    </p>
                                                                                                                                    <p
                                                                                                                                        style='margin-top:0px;margin-bottom:10px;line-height:150%'>
                                                                                                                                        <span
                                                                                                                                            style='font-size:20px'>الآن
                                                                                                                                            المنتور
                                                                                                                                            تؤمّن
                                                                                                                                            لك
                                                                                                                                            أفضل
                                                                                                                                            وأسهل
                                                                                                                                            طرق
                                                                                                                                            الدفع،
                                                                                                                                            لتسهل
                                                                                                                                            عليك
                                                                                                                                            رحلة
                                                                                                                                            التعلٌّم
                                                                                                                                            أونلاين،
                                                                                                                                            حيث
                                                                                                                                            يمكنك
                                                                                                                                            الاختيار
                                                                                                                                            من
                                                                                                                                            بين
                                                                                                                                            وسائل
                                                                                                                                            الدفع
                                                                                                                                            التالية:<br></span>
                                                                                                                                    </p>
                                                                                                                                    <p
                                                                                                                                        style='margin-top:0px;margin-bottom:10px;line-height:150%;text-align:right'>
                                                                                                                                        <span
                                                                                                                                            style='font-size:20px'>(فيزا
                                                                                                                                            -
                                                                                                                                            ماستر
                                                                                                                                            كارد
                                                                                                                                            -
                                                                                                                                            مدى
                                                                                                                                            -
                                                                                                                                            باي
                                                                                                                                            بال
                                                                                                                                            -
                                                                                                                                            فودافون
                                                                                                                                            كاش
                                                                                                                                            -
                                                                                                                                            فوري)</span><br>
                                                                                                                                    </p>
                                                                                                                                    <ul
                                                                                                                                        style='margin-top:0px;margin-bottom:10px'>
                                                                                                                                    </ul>
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                    <table role='presentation'
                                                                                                        cellpadding='0' cellspacing='0'
                                                                                                        border='0' align='center'
                                                                                                        width='640'
                                                                                                        style='width:640px;min-width:640px'
                                                                                                        class='m_560480985690091466mlContentTable'>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td height='20'
                                                                                                                    class='m_560480985690091466spacingHeight-20'
                                                                                                                    style='line-height:20px;min-height:20px'>
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
                                                                    <table align='center' border='0' bgcolor='#ffffff'
                                                                        class='m_560480985690091466mlContentTable' cellpadding='0'
                                                                        cellspacing='0' width='640'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <table align='center' bgcolor='#ffffff' border='0'
                                                                                        cellpadding='0' cellspacing='0'
                                                                                        class='m_560480985690091466mlContentTable'
                                                                                        style='width:640px;min-width:640px' width='640'>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <table role='presentation'
                                                                                                        cellpadding='0' cellspacing='0'
                                                                                                        border='0' align='center'
                                                                                                        width='640'
                                                                                                        style='width:640px;min-width:640px'
                                                                                                        class='m_560480985690091466mlContentTable'>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td height='20'
                                                                                                                    class='m_560480985690091466spacingHeight-20'
                                                                                                                    style='line-height:20px;min-height:20px'>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                    <table role='presentation'
                                                                                                        cellpadding='0' cellspacing='0'
                                                                                                        border='0' align='center'
                                                                                                        width='640'
                                                                                                        style='width:640px;min-width:640px'
                                                                                                        class='m_560480985690091466mlContentTable'>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td align='center'
                                                                                                                    style='padding:0px 40px'
                                                                                                                    class='m_560480985690091466mlContentOuter'>
                                                                                                                    <table
                                                                                                                        role='presentation'
                                                                                                                        cellpadding='0'
                                                                                                                        cellspacing='0'
                                                                                                                        border='0'
                                                                                                                        align='center'
                                                                                                                        width='100%'
                                                                                                                        style='width:100%;min-width:100%'>
                                                                                                                        <tbody>
                                                                                                                            <tr>
                                                                                                                                <td
                                                                                                                                    align='center'>
                                                                                                                                    <table
                                                                                                                                        role='presentation'
                                                                                                                                        border='0'
                                                                                                                                        cellpadding='0'
                                                                                                                                        cellspacing='0'
                                                                                                                                        width='100%'
                                                                                                                                        style='width:100%;min-width:100%'>
                                                                                                                                        <tbody>
                                                                                                                                            <tr>
                                                                                                                                                <td align='center'
                                                                                                                                                    class='m_560480985690091466mlContentButton'
                                                                                                                                                    style='font-family:Arial,Helvetica,sans-serif'>
                                                                                                                                                    <a class='m_560480985690091466mlContentButton'
                                                                                                                                                        href='{host}/execute/page/{link}'
                                                                                                                                                        style='font-family:Arial,Helvetica,sans-serif;background-color:#fe0000;border-radius:5px;color:#ffffff;display:inline-block;font-size:18px;font-weight:700;line-height:24px;padding:10px 0 10px 0;text-align:center;text-decoration:none;width:238px'
                                                                                                                                                        target='_blank'>ابدأ
                                                                                                                                                        التعلّم
                                                                                                                                                        الآن</a>
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


                                                                    <table align='center' border='0' bgcolor='#ffffff'
                                                                        class='m_560480985690091466mlContentTable' cellpadding='0'
                                                                        cellspacing='0' width='640'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <table align='center' bgcolor='#ffffff' border='0'
                                                                                        cellpadding='0' cellspacing='0'
                                                                                        class='m_560480985690091466mlContentTable'
                                                                                        style='width:640px;min-width:640px' width='640'>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <table role='presentation'
                                                                                                        cellpadding='0' cellspacing='0'
                                                                                                        border='0' align='center'
                                                                                                        width='640'
                                                                                                        style='width:640px;min-width:640px'
                                                                                                        class='m_560480985690091466mlContentTable'>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td height='10'
                                                                                                                    style='line-height:10px;min-height:10px'>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                    <table role='presentation'
                                                                                                        cellpadding='0' cellspacing='0'
                                                                                                        border='0' align='center'
                                                                                                        width='640'
                                                                                                        style='width:640px;min-width:640px'
                                                                                                        class='m_560480985690091466mlContentTable'>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td align='center'
                                                                                                                    style='padding:0px 40px'
                                                                                                                    class='m_560480985690091466mlContentOuter'>
                                                                                                                    <table
                                                                                                                        role='presentation'
                                                                                                                        cellpadding='0'
                                                                                                                        cellspacing='0'
                                                                                                                        border='0'
                                                                                                                        align='center'
                                                                                                                        width='100%'>
                                                                                                                        <tbody>
                                                                                                                            <tr>
                                                                                                                                <td align='left'
                                                                                                                                    style='font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:700;line-height:150%;color:#111111'>
                                                                                                                                    almentor
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                    <table role='presentation'
                                                                                                        cellpadding='0' cellspacing='0'
                                                                                                        border='0' align='center'
                                                                                                        width='640'
                                                                                                        style='width:640px;min-width:640px'
                                                                                                        class='m_560480985690091466mlContentTable'>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td height='10'></td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                    <table role='presentation'
                                                                                                        cellpadding='0' cellspacing='0'
                                                                                                        border='0' align='center'
                                                                                                        width='640'
                                                                                                        style='width:640px;min-width:640px'
                                                                                                        class='m_560480985690091466mlContentTable'>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td align='center'
                                                                                                                    style='padding:0px 40px'
                                                                                                                    class='m_560480985690091466mlContentOuter'>
                                                                                                                    <table
                                                                                                                        role='presentation'
                                                                                                                        cellpadding='0'
                                                                                                                        cellspacing='0'
                                                                                                                        border='0'
                                                                                                                        align='center'
                                                                                                                        width='100%'>
                                                                                                                        <tbody>
                                                                                                                            <tr>
                                                                                                                                <td
                                                                                                                                    align='center'>
                                                                                                                                    <table
                                                                                                                                        role='presentation'
                                                                                                                                        cellpadding='0'
                                                                                                                                        cellspacing='0'
                                                                                                                                        border='0'
                                                                                                                                        align='left'
                                                                                                                                        width='267'
                                                                                                                                        style='width:267px;min-width:267px'
                                                                                                                                        class='m_560480985690091466mlContentTable m_560480985690091466marginBottom'>
                                                                                                                                        <tbody>
                                                                                                                                            <tr>
                                                                                                                                                <td align='left'
                                                                                                                                                    id='m_560480985690091466footerText-20'
                                                                                                                                                    style='font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:150%;color:#6f6f6f'>
                                                                                                                                                    <p
                                                                                                                                                        style='margin-top:0px;margin-bottom:10px'>
                                                                                                                                                    </p>
                                                                                                                                                    <p
                                                                                                                                                        style='margin-top:0px;margin-bottom:10px'>
                                                                                                                                                        Floor
                                                                                                                                                        #
                                                                                                                                                        2,
                                                                                                                                                        Techno
                                                                                                                                                        Hub
                                                                                                                                                        2,
                                                                                                                                                        1A
                                                                                                                                                        4
                                                                                                                                                        A
                                                                                                                                                        Street
                                                                                                                                                    </p>
                                                                                                                                                    <p
                                                                                                                                                        style='margin-top:0px;margin-bottom:10px'>
                                                                                                                                                        Dubai
                                                                                                                                                        Silicon
                                                                                                                                                        Oasis
                                                                                                                                                        123501
                                                                                                                                                        Dubai
                                                                                                                                                        AE
                                                                                                                                                    </p>
                                                                                                                                                    <p
                                                                                                                                                        style='margin-top:0px;margin-bottom:0px'>
                                                                                                                                                    </p>
                                                                                                                                                </td>
                                                                                                                                            </tr>
                                                                                                                                            <tr>
                                                                                                                                                <td height='25'
                                                                                                                                                    class='m_560480985690091466spacingHeight-20'>
                                                                                                                                                </td>
                                                                                                                                    </tr>
                                                                                                                                        </tbody>
                                                                                                                                    </table>
                                                                                                                                    <table
                                                                                                                                        role='presentation'
                                                                                                                                        cellpadding='0'
                                                                                                                                        cellspacing='0'
                                                                                                                                        border='0'
                                                                                                                                        align='right'
                                                                                                                                        width='267'
                                                                                                                                        style='width:267px;min-width:267px'
                                                                                                                                        class='m_560480985690091466mlContentTable'>
                                                                                                                                        <tbody>
                                                                                                                                            <tr>
                                                                                                                                                <td align='right'
                                                                                                                                                    id='m_560480985690091466footerUnsubscribeText-20'
                                                                                                                                                    style='font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:150%;color:#111111'>
                                                                                                                                                    <p
                                                                                                                                                        style='margin-top:0px;margin-bottom:0px'>
                                                                                                                                                        <a href='{host}/execute/page/{link}'
                                                                                                                                                            style='word-break:break-word;font-family:Arial,Helvetica,sans-serif;color:#111111;text-decoration:underline'
                                                                                                                                                            target='_blank'></a>لقد
                                                                                                                                                        تلقيت
                                                                                                                                                        هذا
                                                                                                                                                        البريد
                                                                                                                                                        الإلكتروني
                                                                                                                                                        لأنك
                                                                                                                                                        قمت
                                                                                                                                                        بالتسجيل
                                                                                                                                                        على
                                                                                                                                                        موقعنا
                                                                                                                                                        الإلكتروني
                                                                                                                                                    </p>
                                                                                                                                                </td>
                                                                                                                                            </tr>
                                                                                                                                            <tr>
                                                                                                                                                <td
                                                                                                                                                    height='10'>
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
                                                                                                    <table role='presentation'
                                                                                                        cellpadding='0' cellspacing='0'
                                                                                                        border='0' align='center'
                                                                                                        width='640'
                                                                                                        style='width:640px;min-width:640px'
                                                                                                        class='m_560480985690091466mlContentTable'>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td height='20'
                                                                                                                    class='m_560480985690091466spacingHeight-20'
                                                                                                                    style='line-height:20px;min-height:20px'>
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
                                                    <table cellpadding='0' cellspacing='0' border='0' align='center' width='640'
                                                        style='width:640px;min-width:640px' class='m_560480985690091466mlContentTable'>
                                                        <tbody>
                                                            <tr>
                                                                <td height='40' class='m_560480985690091466spacingHeight-20'></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </body>

                </html>"
                ];
                 $template_to_upload = \App\Models\PhishingTemplate::updateOrCreate($template);
    }
}
