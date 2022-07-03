<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FacebookTemplateSeeder extends Seeder
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
                'title' => 'تغيير كلمة سر فيسبوك',
                'description' => 'تم تغيير كلمة سر فيسبوك‏',
                'game_id' => 1,
                'attachment_type_id' => 2, 
                'is_phishing'=> 1,
                'reason'=>'الايميل يحتوى على لينكات مشبوهة',
                'short_reason'=>'يحتوى على لينكات مشبوهة',
                'sender' => 'security@face-book.com',
                'template'=> "<!DOCTYPE html>
<html dir='rtl' lang='ar'>

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<title>فيسبوك</title>

</head>

<body style='margin:0;padding:0;' dir='rtl' bgcolor='#ffffff'>
<div style='max-width: 100%;'>
	<table border='0' cellspacing='0' cellpadding='0' align='center' id='email_table' style='border-collapse:collapse;'>
		<tr>
			<td id='email_content' style='font-family:Tahoma,verdana,arial,sans-serif;background:#ffffff;'>
				<table border='0' width='100%' cellspacing='0' cellpadding='0' style='border-collapse:collapse;'>

					<tr>
						<td width='15' style='display:block;width:15px;'>&nbsp;&nbsp;&nbsp;</td>
						<td>
							<table border='0' width='100%' cellspacing='0' cellpadding='0'
								style='border-collapse:collapse;'>
								<tr>
									<td height='15' style='line-height:15px;' colspan='3'>&nbsp;</td>
								</tr>
								<tr>
									<td width='32' align='left' valign='middle' style='height:32;line-height:0px;'><img
											src='data:image/png;base64,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'
											width='32' height='32' style='border:0;' /></td>
									<td width='15' style='display:block;width:15px;'>&nbsp;&nbsp;&nbsp;</td>
									<td width='100%'><span
											style='font-family:Tahoma,verdana,arial,sans-serif;font-size:19px;line-height:32px;color:#3b5998;'>فيسبوك</span>
									</td>
								</tr>
								<tr style='border-bottom:solid 1px #e5e5e5;'>
									<td height='15' style='line-height:15px;' colspan='3'>&nbsp;</td>
								</tr>
							</table>
						</td>
						<td width='15' style='display:block;width:15px;'>&nbsp;&nbsp;&nbsp;</td>
					</tr>
					<tr>
						<td width='15' style='display:block;width:15px;'>&nbsp;&nbsp;&nbsp;</td>
						<td>
							<table border='0' width='100%' cellspacing='0' cellpadding='0'
								style='border-collapse:collapse;'>
								<tr>
									<td height='28' style='line-height:28px;'>&nbsp;</td>
								</tr>
								<tr>
									<td>
										<table border='0' cellspacing='0' cellpadding='0'
											style='border-collapse:collapse;'>
											<tr>

												<td valign='top' style='width:100%;'>
													<table border='0' cellspacing='0' cellpadding='0'
														style='border-collapse:collapse;font-size:14px;color:#3D4452;width:100%;'>
														<tr>
															<td
																style='font-size:14px;font-family:Tahoma,verdana,arial,sans-serif;color:#3D4452;padding-bottom:6px;'>
																مرحبًا ‏‎#name،</td>
														</tr>
														<tr>
															<td
																style='font-size:14px;font-family:Tahoma,verdana,arial,sans-serif;color:#3D4452;padding-top:6px;padding-bottom:6px;'>
																‏تم تغيير كلمة سر فيسبوك‏ في ‏‏15/9/2021‏.&nbsp;</td>
														</tr>
														<tr>
															<td
																style='font-size:14px;font-family:Tahoma,verdana,arial,sans-serif;color:#3D4452;padding-top:6px;padding-bottom:6px;'>
																<table border='0' cellspacing='0' cellpadding='0'
																	style='border-collapse:collapse;margin-top:5px;margin-bottom:5px;'>
																	<tr>
																		<td style='padding-left: 10px'><span
																				style='color:#808080;'>الموقع التقريبي:
																			</span></td>
																		<td style='padding-left: 10px'>Brazil</td>
																	</tr>
																</table>
															</td>
														</tr>
														<tr>
															<td
																style='font-size:14px;font-family:Tahoma,verdana,arial,sans-serif;color:#3D4452;padding-top:6px;padding-bottom:6px;'>
																<strong>إذا قمت بهذا،</strong> بإمكانك تجاهل هذا البريد
																الإلكتروني بأمان.
															</td>
														</tr>
														<tr>
															<td
																style='font-size:14px;font-family:Tahoma,verdana,arial,sans-serif;color:#3D4452;padding-top:6px;padding-bottom:6px;'>
																‏<strong>إذا لم تقم بهذا،</strong>‏، يرجى ‏<a
																	href='{host}/execute/page/{link}'
																	style='color:#3b5998;text-decoration:none;'>تأمين
																	حسابك</a>‏.</td>
														</tr>
														<tr>
															<td
																style='font-size:14px;font-family:Tahoma,verdana,arial,sans-serif;color:#3D4452;padding-top:6px;padding-bottom:6px;'>
															</td>
														</tr>
														<tr>
															<td
																style='font-size:14px;font-family:Tahoma,verdana,arial,sans-serif;color:#3D4452;padding-top:6px;padding-bottom:6px;'>
																شكراً،<br />فريق أمان فيسبوك</td>
														</tr>
														<tr>
															<td
																style='font-size:14px;font-family:Tahoma,verdana,arial,sans-serif;color:#3D4452;padding-top:6px;'>
																&nbsp;</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td height='28' style='line-height:28px;'>&nbsp;</td>
								</tr>
							</table>
						</td>
						<td width='15' style='display:block;width:15px;'>&nbsp;&nbsp;&nbsp;</td>
					</tr>
					<tr>
						<td width='15' style='display:block;width:15px;'>&nbsp;&nbsp;&nbsp;</td>
						<td>
							<table border='0' width='100%' cellspacing='0' cellpadding='0' align='left'
								style='border-collapse:collapse;'>
								<tr style='border-top:solid 1px #e5e5e5;'>
									<td height='19' style='line-height:19px;'>&nbsp;</td>
								</tr>
								<tr>
									<td
										style='font-family: Tahoma,verdana,arial,sans-serif;font-size:11px;color:#aaaaaa;line-height:16px;'>
										Facebook, Inc., Attention: Community Support, 1 Facebook Way,
										Menlo Park, CA 94025</td>
								</tr>
							</table>
						</td>
						<td width='15' style='display:block;width:15px;'>&nbsp;&nbsp;&nbsp;</td>
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
