<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MillionaireQandA extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                "question" => [
                    "en" => "Why is your phone always asking you to install updates?​",
                    "ar" => "لماذا يطلب منك هاتفك دائمًا تثبيت التحديثات؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "So it can fix security glitches​",
                            "ar" => "ليتمكّن من إصلاح الثغرات الأمنيّة.​"
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "So it can wipe confidential data​",
                            "ar" => "ليتمكّن من مسح البيانات السريّة.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "So it can install an anti-virus software",
                            "ar" => "ليتمكّن من تثبيت برامج مكافحة الفيروسات."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "So it can change your privacy settings​",
                            "ar" => "لتتمكّن من تغيير إعدادات الخصوصيّة الخاصّة بك."
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "Visiting malicious websites can lead to:​",
                    "ar" => "يمكن أن تؤدي زيارة المواقع الضارّة إلى:"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Getting infected by viruses and spyware​",
                            "ar" => "الإصابة بالفيروسات وبرامج التجسس."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Phishing & Fraud",
                            "ar" => "التعرض للتصيّد والاحتيال."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Exposure to inappropriate content",
                            "ar" => "التعرض لمحتوى غير لائق."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "All answers are correct",
                            "ar" => "كلّ الإجابات صحيحة.​"
                        ],
                        "is_correct" => 1
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "Phishing emails could be used to do which of the below:​",
                    "ar" => "يمكن استخدام رسائل البريد الإلكترونيّ الاحتياليّة للقيام بأيٍّ مما يلي:"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Gather private and financial information​",
                            "ar" => "جمع معلومات خاصّة وماليّة.​"
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Help you win the lottery​",
                            "ar" => "مساعدتك على ربح اليانصيب.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Get rid of computer’s infections​",
                            "ar" => "التخلص من الفيروسات المُصاب بها الكمبيوتر.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Detect any malicious activity on your PC​",
                            "ar" => "الكشف عن أيّ نشاط ضارّ على الكمبيوتر.​"
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "What is the best minimum length for a strong password?​",
                    "ar" => "ما الحدّ الأدنى الأمثل لعدد الأحرف المُوصَى به؛ لإنشاء كلمة مرور آمنة؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "More than 12 characters​",
                            "ar" => "أكثر من ١٢ حرفًا​"
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "More than 9 characters​",
                            "ar" => "أكثر من ٩ أحرف​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "More than 8 characters​",
                            "ar" => "أكثر من ٨ أحرف"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "More than 7 characters",
                            "ar" => "أكثر من ٧ أحرف"
                        ],
                        "is_correct" => 0
                    ]
                ]
            ],
            [
                "question" => [
                    "en" => "Which of the following characters would make a password complex?​",
                    "ar" => "أيٌّ من الرموز التالية تجعل كلمة المرور أكثر تعقيدًا:"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Capital and small letters​",
                            "ar" => "الأحرف الكبيرة والصغيرة."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Symbols",
                            "ar" => "الرموز.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Numbers",
                            "ar" => "الأرقام."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "All answers are correct​",
                            "ar" => "جميع ما ذُكِر."
                        ],
                        "is_correct" => 1
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "In order to have a strong password, your password should include:​",
                    "ar" => "لتحصل على كلمة مرور قويّة؛ يجب أن تحتوي على:​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Your date of birth​",
                            "ar" => "تاريخ ميلادك.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Your name​",
                            "ar" => "اسمك.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Sequential numbers​",
                            "ar" => "تسلسل ّ عددي.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "All answers are incorrect​",
                            "ar" => "كلّ الإجابات خاطئة.​"
                        ],
                        "is_correct" => 1
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "Which of the following would be the best password? ​",
                    "ar" => "أيٌّ مما يلي تُعدّ كلمة المرور الأفضل؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "mySecret",
                            "ar" => "mySecret"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Dp0si#Z$22 ​",
                            "ar" => "Dp0si#Z$22 ​"
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "abc123",
                            "ar" => "abc123"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "keyboard",
                            "ar" => "keyboard"
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "Means used to conduct social engineering could be:​",
                    "ar" => "إنّ الوسائل التي يمكن استخدامها لإجراء الهندسة الاجتماعيّة هي:​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "All answers are correct​",
                            "ar" => "كلّ الإجابات صحيحة.​"
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Phone calls​",
                            "ar" => "المكالمات الهاتفيّة.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Facebook",
                            "ar" => "الفيسبوك.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Emails",
                            "ar" => "البريد الإلكترونيّ.​"
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "You have a habit of forgetting your phone frequently. What should you do to protect your devices before they get lost?​",
                    "ar" => "ما الذي يجب على المستخدمين فعله لحماية أجهزتهم في حالة فقدانها؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Use passcodes/PINs to lock the screen​",
                            "ar" => "استخدام رموز المرور/أرقام التعريف الشخصيّة لقفل الشاشة.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Enable phone-finding and remote-wiping capabilities​",
                            "ar" => "تفعيل إمكانيّات البحث عن الهاتف، والمسح عن بُعد."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Set the screen to display the owner's contact information",
                            "ar" => "ضبط الشاشة لعرض معلومات الاتصال للمالك."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "All of the above​",
                            "ar" => "جميع ما ذُكِر."
                        ],
                        "is_correct" => 1
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "___________ is a special form of attack using which hackers’ exploit human psychology.​",
                    "ar" => "يُعدّ ___________ شكلًا خاصًّا من أشكال الهجمات، يستخدمه المُحتالون لاستغلال علم النفس البشريّ.​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Pickpocketing",
                            "ar" => "النشل."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Insecure network",
                            "ar" => "الشبكات غير الآمنة."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Social Engineering",
                            "ar" => "الهندسة الاجتماعية"
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Reverse Engineering",
                            "ar" => "الهندسة العكسيّة."
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "An intruder in your Wi-Fi network can:​",
                    "ar" => "يمكن لمتسلّل على شبكة Wi-Fi الخاصّة بك:"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Break into your house",
                            "ar" => "اقتحام منزلك."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Control your place lighting",
                            "ar" => "التحكم في إضاءة المكان.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Steal your private or work information",
                            "ar" => "سرقة معلوماتك الشخصيّة، أو معلومات العمل الخاصّة بك."
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Share the internet bills with you​",
                            "ar" => "مشاركة فواتير الإنترنت معك."
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "When you print documents containing confidential information at work:​",
                    "ar" => "عند طباعة المستندات التي تحتوي على معلومات سريّة في العمل:​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Go to the printer immediately to retrieve the papers​",
                            "ar" => "أنتقل إلى الطابعة مباشرةً لالتقاط الأوراق.​"
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Ask my colleague to get it to me .​",
                            "ar" => "أطلب من زميل إحضارها لي.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Wait until the end of the work and then retrieve all the print-outs of the day​",
                            "ar" => "أنتظر حتى أنتهي من عملي؛ لأحضر كلّ الأوراق مرةً واحدة.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "None of the answers​",
                            "ar" => "لا شيء مما ذُكِر.​"
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "Sharing too much on social networks can lead to:​",
                    "ar" => "يمكن أن تؤدي مشاركة الكثير من المعلومات على شبكات التواصل الاجتماعيّ إلى:​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "All answers are incorrect​",
                            "ar" => "كلّ الإجابات خاطئة.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Nothing",
                            "ar" => "لا شيء.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Providing information that can be exploited by scammers​",
                            "ar" => "تقديم معلومات يمكن استغلالها في الهندسة الاجتماعيّة.​"
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Getting addicted to Facebook​",
                            "ar" => "إدمان فيسبوك.​"
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "What is more safe for you to publish on the Internet?​",
                    "ar" => "ما الأكثر أمانًا لك لتنشره على الإنترنت؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Photos of you, your friends and your family.​",
                            "ar" => "صور لك، ولأصدقائك، ولعائلتك.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Passwords of your web services accounts.​",
                            "ar" => "كلمات مرور حسابات خدمات الويب الخاصّة بك."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Your home telephone number.​",
                            "ar" => "رقم هاتفك المنزليّ."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Your nickname​",
                            "ar" => "اسمك المُستعار."
                        ],
                        "is_correct" => 1
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "Which of the following is NOT a symptom of a compromised computer?​",
                    "ar" => "أيٌّ مما يلي لا تُعدّ من علامات اختراق الكمبيوتر؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Poor system performance​",
                            "ar" => "ضعف أداء النظام.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Random pop-ups​",
                            "ar" => "النوافذ المنبثقة العشوائيّة.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "You can no longer connect to a USB device​",
                            "ar" => "لم يعد بإمكانك الاتصال بجهاز USB.​"
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Browser crashing​",
                            "ar" => "تعطل المتصفح.​"
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "To keep your work related activities secure while on the internet you should:​",
                    "ar" => "للحفاظ على أمان أنشطة العمل الخاصّة بك؛ يجب عليك:​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Use VPN",
                            "ar" => "استخدام شبكة خاصّة افتراضيّة."
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Change the default router password​",
                            "ar" => "تغيير كلمة المرور الافتراضيّة للمُوجه.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Deactivate your Facebook​",
                            "ar" => "إلغاء تنشيط الفيسبوك الخاصّ بك.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "All answers are correct​",
                            "ar" => "كلّ الإجابات صحيحة.​"
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "How can you protect against viruses?​",
                    "ar" => "كيف يمكنك حماية جهازك من الفيروسات؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Only install licensed or open-source software​",
                            "ar" => "تثبيت البرامج المُرخصة، أو مفتوحة المصدر فقط."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Never open unsolicited attachments in emails",
                            "ar" => "عدم فتح أيّ مرفقات غير مرغوب فيها في رسائل البريد الإلكترونيّ على الإطلاق."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Password-protect every windows account on a PC",
                            "ar" => "حماية كلّ حساب windows بكلمة مرور على جهاز الكمبيوتر."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "All of the above",
                            "ar" => "جميع ما ذُكِر."
                        ],
                        "is_correct" => 1
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "What’s the first thing you should do when you get a new phone?",
                    "ar" => "ما أوّل شيء يجب عليك فعله عندما تحصل على هاتف جديد؟"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Take a selfie",
                            "ar" => "التقاط صورة سيلفي."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Place it in a protective case​",
                            "ar" => "وضعه في جراب واقٍ."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Make sure that you can receive your work emails on the phone",
                            "ar" => "التأكّد من إمكانيّة تلقي رسائل البريد الإلكترونيّ الخاصّة بالعمل على الهاتف."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Set up a lock screen",
                            "ar" => "إعداد شاشة القفل."
                        ],
                        "is_correct" => 1
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "If the “From” field contains an email address like “US_green_Card@yahoo.com”. What would this mail probably imply?​",
                    "ar" => 'إذا كان حقل"المُرسل"يحتوي على عنوان بريد إلكترونيّ، مثل:"US_green_Card@yahoo.com"؛ فعلى ماذا يدل هذا البريد الإلكترونيّ؟​'
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "It’s a legitimate mail​",
                            "ar" => "أنّه بريد إلكترونيّ صحيح."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "It’s probably a mail that contains harmful links for malicious attachments",
                            "ar" => "على الأرجح بريد يحتوي على روابط لمُرفقَات ضارّة."
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "I must have been chosen to be granted the US green card",
                            "ar" => "تم اختياري للحصول على البطاقة الخضراء الأمريكيّة."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "All answers are incorrect​",
                            "ar" => "كلّ الإجابات خاطئة."
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "Which of the following is the strongest password? ​",
                    "ar" => "أيٌّ مما يلي تُعدّ كلمة المرور الأقوى؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "BobJones! ​",
                            "ar" => "BobJones! ​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "aC&3i7@rd ​",
                            "ar" => "aC&3i7@rd ​"
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "1234567890 ​",
                            "ar" => "1234567890 ​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "ABcdEFgh ​",
                            "ar" => "ABcdEFgh ​"
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "What is the weakest link in cybersecurity? ​",
                    "ar" => "ما الرابط الأضعف في الأمان الإلكترونيّ؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Weak encryption​",
                            "ar" => "التشفير الضعيف."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Humans",
                            "ar" => "الأشخاص."
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Short passwords​",
                            "ar" => "كلمات المرور القصيرة."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Insufficient memory for CCTV recordings​",
                            "ar" => "الذاكرة غير الكافية لتسجيلات كاميرات المراقبة."
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "What is social engineering?​",
                    "ar" => "ما الهندسة الاجتماعيّة؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "When an organization is planning an activity for the welfare of the community​",
                            "ar" => "تخطيط مؤسسة لإقامة نشاط من أجل رفاهية المجتمع."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Using physical force to gain access to documents with classified information",
                            "ar" => "استخدام القوة الجسديّة للوصول إلى المستندات ذات المعلومات السريّة."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Hacking either telecommunication or wireless networks to gain access to computer systems",
                            "ar" => "اختراق شبكات الاتصالات، أو الشبكات اللاسلكيّة للوصول إلى أنظمة الكمبيوتر."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Using psychological manipulation to deceive people to gain access to certain information​",
                            "ar" => "استخدام التلاعب النفسيّ لخداع الأشخاص للوصول إلى معلومات معينة."
                        ],
                        "is_correct" => 1
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "Who are the targets of modern day hackers?​",
                    "ar" => "مَنْ هم أهداف المُحتالين في العصر الحديث؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Banks and financial businesses that process a lot of payments.​",
                            "ar" => "البنوك والشركات الماليّة التي تتعامل مع الكثير من المدفوعات.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Any organization or individual is liable to be the victim of hackers.",
                            "ar" => "أيّ مؤسسة أو فرد معرض ليكون ضحيّة للمُحتالين."
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Corporations that have a lot of proprietary information.",
                            "ar" => "الشركات التي لديها الكثير من المعلومات الخاصّة."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Companies which saves credit card numbers of customers.",
                            "ar" => "الشركات التي تحفظ أرقام البطاقات الائتمانيّة للعملاء."
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "You received an email from your manager and this email contained a link that you should check. What would you do?​",
                    "ar" => "تلقيت بريدًا إلكترونيًّا من مديرك يحتوي على رابط عليك التحقق منه؛ ماذا ستفعل؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "My manager would never send me harmful mail; I can safely click the link.​",
                            "ar" => "من غير الممكن على الإطلاق أن يُرسل مديري بريدًا ضارًّا؛ لذا سأنقر على هذا الرابط وأنا مطمئن.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "I should hover over the link and make sure that it displays the same address as described in the message.​",
                            "ar" => "يجب أن أمرر الماوس على الرابط؛ للتأكّد من أنّه يعرض نفس العنوان الموضّح في الرسالة.​"
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Any links in any emails mean that it’s a phishing attack.​",
                            "ar" => "إنّ أيّ روابط في أيّ رسائل بريد إلكترونيّ تعني التعرّض لهجمة تصيّد."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "All answers are correct",
                            "ar" => "كلّ الإجابات صحيحة."
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "Your Wi-Fi password should be:​",
                    "ar" => "يجب أن تكون كلمة مرور شبكة الواي فاي الخاصّة بك:​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "The default password​",
                            "ar" => "كلمة المرور الافتراضيّة.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "WEP security password",
                            "ar" => "كلمة مرور تأمين WEP.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Different from your other passwords​",
                            "ar" => "مختلفة عن كلمات المرور الأخرى الخاصّة بك.​"
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "All answers are correct​",
                            "ar" => "كلّ الإجابات صحيحة."
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "You are asked from a co-worker to send some work files to his personal e-mail:​",
                    "ar" => "طلب منك زميل إرسال بعض ملفات العمل إلى بريده الإلكترونيّ الشخصيّ:"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "I will send it to him because he is a known colleague at work",
                            "ar" => "سأرسلها إليه؛ لأنّه زميل معروف في العمل."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "I will not send it to him because the files have a large size.",
                            "ar" => "لن أرسلها إليه؛ لأنّ حجمها كبير."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "I will not send it to him because it may expose work information to risk.",
                            "ar" => "لن أرسلها إليه؛ فقد يعرّض ذلك معلومات العمل إلى مخاطر كبيرة."
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "None of the answers​",
                            "ar" => "لا شيء مما ذُكِر."
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "When using a public computer, what should you make sure to do?",
                    "ar" => "عند استخدام كمبيوتر عامّ، ما الذي يجب عليك الحرص على القيام به؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Avoid prying eyes​",
                            "ar" => "تجنّب أعين المتطفلين."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Avoid banking or other confidential transactions",
                            "ar" => "تجنّب المعاملات المصرفيّة، أو المعاملات السريّة الأخرى."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Use incognito mode or in private browsing",
                            "ar" => "استخدام وضع التصفّح الخفيّ، أو التصفّح الخاصّ."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "All of the above​",
                            "ar" => "جميع ما ذُكِر."
                        ],
                        "is_correct" => 1
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "A person you know has sent you a message on linkedin requesting a loan for an urgent matter. What is the correct action to do?​",
                    "ar" => "أرسل إليك شخص تعرفه رسالة على لينكد إن، يطلب فيها قرضًا لمسألة عاجلة؛ ما الإجراء الصحيح الذي يجب عليك القيام به؟"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Call the police",
                            "ar" => "الاتصال بالشرطة."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Reply to the message to find out what happened​",
                            "ar" => "الردّ على الرسالة لمعرفة ما حدث."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Unfriend or block the person immediately",
                            "ar" => "إلغاء صداقة هذا الشخص، أو حظره على الفور."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Call the person to verify his claims",
                            "ar" => "الاتصال بهذا الشخص للتحقق من هذه الادعاءات."
                        ],
                        "is_correct" => 1
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "Which one of these things is most effective for maintaining your digital privacy?",
                    "ar" => "ما الإجراء الأكثر فاعليّة للحفاظ على خصوصيتك الرقميّة فيما يلي؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Unsubscribing from all spam emails.",
                            "ar" => "إلغاء الاشتراك من كلّ رسائل البريد الإلكترونيّ العشوائيّة."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Covering your computer’s front-facing camera with a tape.",
                            "ar" => "تغطية الكاميرا الأماميّة لجهاز الكمبيوتر بشريط."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Not sharing personal information on social media.",
                            "ar" => "عدم مشاركة معلوماتك الشخصيّة على وسائل التواصل الاجتماعيّ."
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "All answers are incorrect.",
                            "ar" => "كلّ الإجابات خاطئة."
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "Which of the following is a sign that your computer has been infected?​",
                    "ar" => "أيٌّ مما يلي تُعدّ علامة على إصابة الكمبيوتر الخاصّ بك بالفيروسات؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "You have sticky keys in your keyboard",
                            "ar" => "ثبات بعض المفاتيح في لوحة المفاتيح."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "There are new applications installed in your computer that you do not know what they are used for​",
                            "ar" => "وجود تطبيقات جديدة مثبتة على الكمبيوتر، ولا تعرف الغرض من استخدامها."
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "You cannot print any documents with your printer​",
                            "ar" => "لا يمكنك طباعة أيّ مستندات باستخدام الطابعة الخاصّة بك."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Windows update is requesting to restart your computer in middle of your work",
                            "ar" => "يطلب منك تحديث Windows إعادة تشغيل الكمبيوتر أثناء عملك.​"
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "What should you do immediately if you lose your phone?​",
                    "ar" => "ما الذي ينبغي عليك القيام به فور فقدانك لهاتفك؟"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Send your photo and address to your phone",
                            "ar" => "إرسال صورتك، وعنوانك إلى هاتفك."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Cancel the old number and start shopping for a new phone",
                            "ar" => "إلغاء الرقم القديم، والبدء في التسوق لشراء هاتف جديد."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Inform your friends and family through a social networking post",
                            "ar" => "إبلاغ أصدقائك، وعائلتك من خلال منشور على الشبكات الاجتماعيّة."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Use a phone locating service to track and lock your phone remotely",
                            "ar" => "استخدام خدمة تحديد موقع الهاتف؛ لتتبع هاتفك وقفله عن بُعد."
                        ],
                        "is_correct" => 1
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "Which of the following is the biggest risk when using URL shorteners?​",
                    "ar" => "أيٌّ مما يلي يمثل الخطر الأكبر عند استخدام أدوات تقصير عناوين المواقع الإلكترونية؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "The companies that provide URL shortening services have dubious hidden agendas​",
                            "ar" => "الشركات التي تقدم خدمات تقصير عناوين المواقع الإلكترونية URL التي لديها خطط خفيّة مشكوك فيها."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Spammers can send more than one web address within a single tweet or SMS message​",
                            "ar" => "تمكن مُرسلو البريد العشوائيّ من إرسال أكثر من عنوان ويب واحد في تغريدة واحدة، أو رسالة SMS.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Criminals can send links with malicious files hidden behind a short URL so that its hard to tell whether the destination is safe or not​",
                            "ar" => "تمكن المجرمون من إرسال روابط تحتوي على ملفات ضارّة مخفيّة خلف عنوان URL قصير، بحيث لا يمكن – بسهولة - لأيّ شخص  معرفة ما إذا كانت الوجهة آمنة أم لا.​"
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Your business cannot track the true sources of your website traffic",
                            "ar" => "لا يمكن لشركتك تتبع المصادر الحقيقيّة لزيارات موقعك."
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => 'You received a mail from your friend that contains a"YouTube"link but you didn’t expect such a video. What would you do?​',
                    "ar" => 'تلقيت بريدًا إلكترونيًّا من صديق لك يحتوي على رابط"يوتيوب”، ولكنك لم تتوقع أن يُرسل لك صديقك مقطع الفيديو هذا؛ ماذا ستفعل؟​'
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "It’s a trusted friend, it can never be a harmful mail​",
                            "ar" => "إنّه صديق موثوق فيه؛ لذا لا يمكن أن يكون هذا بريدًا ضارًّا."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => '"YouTube"is a safe website, it’s alright if I just click it',
                            "ar" => 'إنّ اليوتيوب موقع آمن، ولا يوجد ضرر في النقر على هذا الرابط.'
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "I should verify that mail with my friend. Maybe he’s a victim of malicious attack​",
                            "ar" => "يجب عليّ التحقق من هذا البريد مع صديقي؛ ربما يكون ضحيّة لهجمة برامج ضارّة."
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "All answers are correct​",
                            "ar" => "كلّ الإجابات صحيحة.​"
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "What is the best way to validate a strange email but from people that you know?​",
                    "ar" => "ما أفضل طريقة للتحقق من بريد إلكترونيّ غريب، ولكنّه مُرسَل من شخص تعرفه؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Bad spelling, poor syntax and grammar are one of the tell-tale signs of a fake email.​",
                            "ar" => "إنّ التهجئة الخاطئة، والقواعد النحويّة السيئة من علامات البريد الإلكترونيّ المزيف.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Look at the email headers to check the source IP address.​",
                            "ar" => "النظر إلى عنوان البريد الإلكتروني للتحقق من عنوان بروتوكول الإنترنت المصدر."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Look for poorly replicated logos.​",
                            "ar" => "البحث عن شعارات مُكرّرة بطريقة سيئة."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Contact the sender by phone to verify whether they sent you the email.​",
                            "ar" => "الاتصال بالمُرسِل هاتفيًّا للتأكّد مما إذا كان قد أرسل هذا البريد الإلكتروني بالفعل."
                        ],
                        "is_correct" => 1
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "You get a call from your technical support helpdesk saying they are performing an urgent server upgrade. They ask you for your password. What should you do?​",
                    "ar" => "تتلقى مكالمة من مكتب المساعدة للدعم الفنيّ تُفيد بأنّهم يقومون بترقية عاجلة للخادم، ويسألونك عن كلمة المرور الخاصّة بك؛ ما الذي يجب عليك فعله؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Refuse and contact your manager or Information Security team.​",
                            "ar" => "ترفض وتتصل بمديرك، أو فريق أمن المعلومات."
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Get the agent's name and give him your username and password by phone.",
                            "ar" => "تحصل على اسم الوكيل، وتخبره عن اسم المستخدم، وكلمة المرور عبر الهاتف."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Get the agent's email address and email him your login and password.",
                            "ar" => "تحصل على عنوان البريد الإلكترونيّ للوكيل، وتُرسل له معلومات تسجيل الدخول، وكلمة المرور الخاصّة بك بالبريد الإلكترونيّ."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Give the support representative your password, but not your username.",
                            "ar" => "تعطي ممثل الدعم كلمة مرورك، ولكن ليس اسم المستخدم الخاصّ بك."
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "You are not at work and your co-worker needs to access data only you have access to. What would you do?​",
                    "ar" => "أنت غير متواجد في مقرّ العمل، ويريد زميل لك أن يصل إلى بعض المعلومات التي تمتلك - وحدك – إمكانيّة الوصول إليها؛ ماذا ستفعل؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Connect to your work network via VPN​",
                            "ar" => "الاتصال بشبكة العمل باستخدام شبكة خاصّة افتراضيّة (VPN)."
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Share your account password with him​",
                            "ar" => "إخباره بكلمة مرور حسابك."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Tell him you'd do it tomorrow​",
                            "ar" => "إخباره بأنك ستقوم بهذا الأمر غدًا."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "All answers are incorrect​",
                            "ar" => "كلّ الإجابات خاطئة."
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "Which of the following is the best protection method to secure your Wi-Fi:​",
                    "ar" => "أيٌّ مما يلي يُعدّ أفضل طريقة لحماية شبكة الواي فاي الخاصّة بك:​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "WEP",
                            "ar" => "WEP"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "WPA2",
                            "ar" => "WPA2"
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "RSA",
                            "ar" => "RSA"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "WPA",
                            "ar" => "WPA"
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "You open a website and it has a padlock 🔒 in the browser bar.  Which statements are true? ​",
                    "ar" => "عندما تتصفح موقع إلكتروني و تجد رمز القفل 🔒 في شريط العنوان الخاص بالمتصفح..  أي الجمل التالية صحيحة؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "I can be sure that this is a legit, non-malicious site​",
                            "ar" => "يمكنني التأكد من أن هذا موقع شرعي وغير ضار ​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "It’s a warning message indicating that this site cannot be hacked by cyber-criminals​",
                            "ar" => "إنها رسالة تحذيرية تشير إلى أن هذا الموقع لا يمكن اختراقه بواسطة المحتالين.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "The traffic between my computer (browser) and the server that runs the website is encrypted​",
                            "ar" => "الاتصال مشفر بين جهاز الكمبيوتر الخاص بي (المتصفح) والخادم الذي يقوم بتشغيل موقع الويب​"
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "This could be a phishing site.​",
                            "ar" => "يمكن أن يكون موقع تصيد.​"
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "When you receive an email, you should check which of the below:​",
                    "ar" => "عند تلقي بريد إلكترونيّ؛ يجب عليك التحقق من أيٍّ مما يلي:​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => '    The"From"field.​',
                            "ar" => '    حقل"المُرسل"(From:).​'
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => '    The"TO"and"CC"fields.​',
                            "ar" => '    حقل"المُستلم"(To:)، وحقل"نسخة"(CC:).​'
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => '    None of the fields is important to check.​',
                            "ar" => '    من غير المهمّ التحقق من أيٍّ من هذه الحقول.​'
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => '    The"From"and"CC"fields.​',
                            "ar" => '    حقل"المُرسل"(From:)، وحقل"نسخة"(CC:).​'
                        ],
                        "is_correct" => 1
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "You received an email that requires urgent and immediate action from your side. What would you do in such situation?​",
                    "ar" => "تلقيت بريدًا إلكترونيًّا يطلب منك اتخاذ إجراء فوريّ وعاجل؛ ماذا ستفعل في هذا الموقف؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "There’s no time, I should just click that link because its urgent.​",
                            "ar" => "لا يوجد وقت لأيّ إجراءات، سأنقر فقط على هذا الرابط لأنّه عاجل."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Its safe. The company's firewall would've blocked it if it was malicious.​",
                            "ar" => ". إنّه آمِن، إذ لو كان ضارًّا؛ فإنّ جدار الحماية الخاصّ بالشركة سيقوم بحظره."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Reply to the sender by email and ask if the link is safe to open.​",
                            "ar" => "الردّ على المُرسِل بواسطة البريد الإلكترونيّ وسؤاله عمّا إذا كان الرابط آمنًا لفتحه."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "All answers are incorrect.",
                            "ar" => "كلّ الإجابات خاطئة."
                        ],
                        "is_correct" => 1
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "You discover your email account has been compromised. What is the best way to prevent unauthorized access to your email?​",
                    "ar" => "اكتشفت اختراق حساب البريد الإلكترونيّ الخاصّ بك؛ ما أفضل طريقة لمنع الوصول غير المُصرّح به لبريدك الإلكترونيّ؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Change the password and enable two-factor authentication.​",
                            "ar" => "تغيير كلمة المرور، وتمكين المصادقة ثنائية العامل."
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Change the password, then run an anti-virus scan ​",
                            "ar" => "تغيير كلمة المرور، ثم تشغيل فحص مكافحة الفيروسات."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Change the login password to your computer.​",
                            "ar" => "تغيير كلمة مرور تسجيل الدخول إلى الكمبيوتر الخاصّ بك."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Updating your email application software to the latest version.​",
                            "ar" => "تحديث برامج تطبيق البريد الإلكترونيّ إلى آخر نسخة."
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "You see a person in your building who is acting suspiciously. You approach him and ask him if everything is okay and he claims to be the fire safety inspector. What should you do next?​",
                    "ar" => "ترى شخصًا في المبنى الخاصّ بك يتصرف بشكل مريب؛ تقترب منه وتسأله عمّا إذا كان كلّ شيء على ما يُرام؛ فيدّعي أنّه مفتش السلامة من الحرائق؛ ما الذي يجب عليك القيام به بعد ذلك؟"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Leave him to do his job, this is standard procedure to comply with safety regulations.​",
                            "ar" => "تركه يقوم بعمله؛ فهذا إجراء قياسيّ للامتثال لتنظيمات السلامة."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Report the incident to the security department.​",
                            "ar" => "إبلاغ إدارة الأمن بالحادث."
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Show him the critical equipment in your office that are most susceptible to fire hazards in order to have them properly protected.​",
                            "ar" => "تُرشده إلى المعدات المهمّة الأكثر عرضة لمخاطر الحرائق في مكتبك من أجل حمايتها بشكل صحيح."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Ask him the name of his company and verify it using Google.​",
                            "ar" => "سؤاله عن اسم شركته، والتحقق منها في Google."
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "When traveling, what is the safest way to use Wi-Fi ?​",
                    "ar" => "عند السفر؛ ما الطريقة الأكثر أمانًا لاستخدام شبكة Wi-Fi؟"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Connect to Wi-Fi using a Virtual Private Network (VPN).​",
                            "ar" => "الاتصال بشبكة Wi-Fi باستخدام شبكة خاصّة افتراضيّة (VPN)."
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Connect to airport wi-fi networks because its monitored by immigration & security officers.​",
                            "ar" => "الاتصال بشبكات wi-fi في المطار فقط؛ لأنّها مُراقَبة من قبل مسؤولي الهجرة."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Connect as quickly as possible​",
                            "ar" => "الاتصال بالشبكة بأسرع ما يمكن."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Make sure that antivirus is enabled before connecting​",
                            "ar" => "التأكّد من تمكين برنامج مكافحة الفيروسات قبل الاتصال."
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "When travelling, you use a USB stick carried in your laptop bag to back-up your system. What is the risk here?​",
                    "ar" => "عند السفر؛ تستخدم شريحة USB الموجودة في حقيبة الكمبيوتر المحمول الخاصّة بك لإجراء نسخة احتياطيّة لنظامك؛ ما المخاطر هنا؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "USB sticks are small and can easily be lost.​",
                            "ar" => "إنّ شريحة USB صغيرة الحجم، ويمكن فقدها بسهولة."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Backups should never be stored in the same location as the original data set.​",
                            "ar" => "لا ينبغي أبدًا تخزين النسخ الاحتياطيّة في نفس مكان البيانات الأصليّة."
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Electromagnetic airport scanners can corrupt the backup disk.​",
                            "ar" => "يمكن أن تُتلِف الماسحات الضوئيّة الكهرومغناطيسيّة في المطارات أقراص النسخ الاحتياطيّ."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "The movement or weight of the laptop can easily crush or damage the USB stick.​",
                            "ar" => "يمكن أن تؤدي حركة الكمبيوتر المحمول، أو وزنه إلى تحطّم شريحة USB، أو إتلافها بسهولة."
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "What do you do to prevent data loss in the case your laptop gets stolen?​",
                    "ar" => "ماذا تفعل لمنع فقدان البيانات في حالة سرقة الكمبيوتر المحمول الخاصّ بك؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "encrypt data on your laptop​",
                            "ar" => "تشفير البيانات على الكمبيوتر المحمول."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Leave a note on your laptop with your phone number such that you can negotiate on how to get your laptop back​",
                            "ar" => "ترك ملاحظة على الكمبيوتر المحمول برقم هاتفك بحيث يمكنك التفاوض حول كيفيّة استعادته."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Always backup the data in the laptop before traveling. ​",
                            "ar" => "إجراء نسخ احتياطيّ دائمًا للبيانات الموجودة على الكمبيوتر المحمول قبل السفر."
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "All answers are incorrect​",
                            "ar" => "كلّ الإجابات خاطئة."
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "You received an email that contains a link with a shortened URL. Which of the following is the correct method to verify the true destination of a shortened URL?​",
                    "ar" => "تلقيت بريدًا إلكترونيًّا يحتوي على رابط بعنوان URL مختصر؛ أيٌّ مما يلي يُعدّ الطريقة الصحيحة للتحقق من الوجهة الحقيقيّة لعنوان URL المختصر؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Go to urlxray.com and expand the shortened URL​",
                            "ar" => "انتقل إلى موقع urlxray.com، وقُم بمعرفة العنوان الحقيقي لعنوان URL المختصر."
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Verify the ‘From’ email address is from someone you know",
                            "ar" => "تحقق من أنّ عنوان البريد الإلكترونيّ للمُرسل يعود لشخص تعرفه."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Have your email scanned by an antivirus and anti-spam software",
                            "ar" => "افحص بريدك الإلكترونيّ بواسطة برنامج مكافحة الفيروسات، ومكافحة البريد العشوائيّ."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Only click on URL shorteners from goo.gl since this service is provided by a well-known company",
                            "ar" => "انقر على مختصرات عناوين URL من موقع goo.gl؛ لأن هذه الخدمة مُقدّمة من شركة معروفة."
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "You received the following link:  tinyurl.com/zzz Which of the following is the correct way to preview the URL?​",
                    "ar" => "إستلمت الرابط التالى: tinyurl.com/zzz فما الطريقة الصحيحة لمعاينته ؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Type in the address bar: tinyurl.com/zzz-​",
                            "ar" => "تكتب فى شريط العناوين: tinyurl.com/zzz-​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Type in the address bar: tinyurl.com/zzz+​",
                            "ar" => "تكتب فى شريط العناوين: tinyurl.com/zzz+​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Type in the address bar: checkshorturl.com/tinyurl.com/zzz​",
                            "ar" => "تكتب فى شريط العناوين: checkshorturl.com/tinyurl.com/zzz​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Type in the address bar: preview.tinyurl.com/zzz​",
                            "ar" => "تكتب فى شريط العناوين: preview.tinyurl.com/zzz"
                        ],
                        "is_correct" => 1
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "Which of the following links may be related to Facebook? ​",
                    "ar" => "أي من الروابط الأتية من الممكن ان يكون خاص بموقع فيسبوك ؟"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "https://facebook.m.com​",
                            "ar" => "https://facebook.m.com​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "http://facebook.m.com​",
                            "ar" => "http://facebook.m.com​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "https://m.facebook.com​",
                            "ar" => "https://m.facebook.com​"
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "https://faceb00k.com​",
                            "ar" => "https://faceb00k.com​"
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "You have a highly sensitive work document which you need to email to a trusted contractor. What is the safest way to send this?​",
                    "ar" => "تحتاج إلى إرسال مستند عمل حسّاس للغاية بالبريد إلكترونيّ إلى مقاول موثوق فيه؛ ما الطريقة الأكثر أمانًا لإرساله؟"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Scan the document with an anti-virus software first.​",
                            "ar" => "فحص المستند باستخدام برنامج مكافحة الفيروسات أولًا."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Send the document from a temporary email account that self-destructs after a certain period.​",
                            "ar" => "إرسال المستند من حساب بريد إلكترونيّ مؤقّت يُدمر نفسه ذاتيًّا بعد فترة معينة."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Encrypt the document first. Then send the password to the contractor using a different communication method, such as SMS.​",
                            "ar" => "تشفير المستند أولًا، ثم إرسال كلمة المرور إلى المقاول باستخدام طريقة اتصال مختلفة، مثل: الرسائل القصيرة."
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Send the document using a file sharing application.​",
                            "ar" => "إرسال المستند باستخدام تطبيق مشاركة الملفات."
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "Where should you store the passphrase for your laptop?​",
                    "ar" => "أين يجب عليك حفظ جملة المرور الخاصّة بالكمبيوتر المحمول الخاصّ بك؟"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "On a sticker underneath your laptop’s battery so no one can see it.​",
                            "ar" => "على مُلصَق أسفل بطارية الكمبيوتر المحمول بحيث لا يتمكن أيّ شخص من رؤيته."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "In a Word file stored on your smart phone​",
                            "ar" => "في ملف Word مُخزّن على الهاتف الذكيّ الخاصّ بك."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "On a card placed in your personal wallet​",
                            "ar" => "على بطاقة في محفظتك الشخصيّة."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "None of the above​",
                            "ar" => "لا شيء مما ذُكِر."
                        ],
                        "is_correct" => 1
                    ],
                ]
            ],

            [
                "question" => [
                    "en" => "You want to send a web address to a coworker but is too long to send. You decided to shorten the URL with a URL shortener service. What is the safest way to send the shortened URL to your coworker?​",
                    "ar" => "تريد أن تُرسل عنوان موقع على الإنترنت إلى زميل من زملائك في العمل، لكنّ رابط هذا الموقع طويل جدًّا؛ فقررت أن تختصر الرابط عن طريق خدمة مُختصِر الروابط؛ ما هي الطريقة الأكثر أمانًا لإرسال رابط مُختصَر إلى زميلك في العمل؟:​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Write it on paper and hand it to your coworker​",
                            "ar" => "كتابته على ورقة، ثم تعطي الورقة لزميلك​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Add a preview extension to the short link before sending​",
                            "ar" => "إضافة امتداد معاينة للرابط المُختصَر قبل إرساله​"
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Always share shortened URLs with coworkers through a secure VPN connection​",
                            "ar" => "مشاركة الروابط المُختصَرة دائمًا مع الزملاء عن طريق الاتصال بشبكة افتراضيّة خاصّة (VPN)​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Select a URL shortener service that has the most reviews and ratings​",
                            "ar" => "اختيار خدمة اختصار روابط توجد بها معظم المعاينات والتصنيفات​"
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "Allowing a website to install a plugin for you can lead to:​",
                    "ar" => "يمكن أن يؤدي السماح لموقع إلكترونيّ بتثبيت مُكونات إضافية للمتصفح (plugin) لك إلى:​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Installing a fake software​",
                            "ar" => "تثبيت برامج زائفة.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Exposing you to inappropriate content​",
                            "ar" => "عرض محتوى غير لائق.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Taking control over the settings of your browser​",
                            "ar" => "السيطرة على إعدادات المتصفح الخاص بك.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "All answers are correct​",
                            "ar" => "كلّ الإجابات صحيحة.​"
                        ],
                        "is_correct" => 1
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "A coworkers tells you that he has an urgent deadline to meet. But unfortunately, they he has  forgotten his password to a database. What should you do to help?​",
                    "ar" => "يخبرك زميلك في العمل أنّ لديه موعدًا نهائيًّا عاجلًا للوفاء به، ولكنّه - لسوء الحظ - نسي كلمة المرور الخاصّة به لقاعدة البيانات، ما الذي عليك فعله لمساعدته؟​"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Go to his computer and login to the database using your credentials without letting him know your password.​",
                            "ar" => "1. استخدام الكمبيوتر الخاصّ به، وتسجيل الدخول إلى قاعدة البيانات باستخدام بيانات تسجيل الدخول الخاصّة بك دون أن تخبره بكلمة مرورك.​"
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Tell your colleague to call your IT helpdesk for a password reset link.​",
                            "ar" => "إخبار صديقك بالاتصال بمكتب المساعدة لتكنولوجيا المعلومات للحصول على رابط إعادة ضبط كلمة المرور."
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Share your login credentials temporarily so your colleague can meet their deadline.​",
                            "ar" => "مشاركة بيانات تسجيل الدخول الخاصّة بك معه مؤقتًا، حتى يتمكن من الوفاء بموعده."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Put your login credentials on an encrypted USB memory stick and hand it to him.​",
                            "ar" => "وضع بيانات تسجيل الدخول الخاصّة بك على شريحة ذاكرة USB مُشفّرة، وتسليمها إليه."
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
            [
                "question" => [
                    "en" => "You're just leaving your office for the day, when you stumble upon a USB stick on the floor.  What should you do?​",
                    "ar" => "غادرت مكتبك للتوّ بعد انتهاء عملك، وعثرت على شريحة USB مُلقاة على الأرض؛ ما الذي يجب عليك فعله؟"
                ],
                "answers" => [
                    [
                        "answer" => [
                            "en" => "Pick it up and plug it in to try and find any indication of whom it belongs to, so you can return it to its rightful owners.​",
                            "ar" => "تلتقطها وتقوم بتوصيلها لمحاولة العثور على أيّ علامة تدل على صاحبها الأصليّ لتعيدها إليه."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Leave it where it is. It's not your problem.​",
                            "ar" => "تتركها في مكانها، ولا تعبأ بالأمر."
                        ],
                        "is_correct" => 0
                    ],
                    [
                        "answer" => [
                            "en" => "Hand it to the security team for them to deal with.​",
                            "ar" => "تسلمها إلى فريق الأمن للتعامل مع الأمر بشكل صحيح."
                        ],
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Take it home and format it clean.​",
                            "ar" => "تأخذها معك إلى المنزل، وتعيد تنسيقها لمسح كلّ ما عليها."
                        ],
                        "is_correct" => 0
                    ],
                ]
            ],
        ];
        foreach($questions as $question){

            $item_q = \App\Models\MillionairQuestions::updateOrCreate([
                'question' => $question['question'],
                'type_id' => \App\Models\MillionairQuestionsType::all()->random()->id,
                'category_id' => 1
            ]
            );
            foreach($question['answers'] as $answer)
            {
                $item_a = \App\Models\MillionairAnswers::updateOrCreate([
                'question_id'=>$item_q->id,
                'answer'=>$answer['answer'],
                'is_correct' => $answer['is_correct']
                ]);
            }
            
        }
    }
}
