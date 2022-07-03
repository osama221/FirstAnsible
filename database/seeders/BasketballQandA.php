<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BasketballQandA extends Seeder
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
                    ]
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
                    ]
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
                        "is_correct" => 1
                    ],
                    [
                        "answer" => [
                            "en" => "Numbers",
                            "ar" => "الأرقام."
                        ],
                        "is_correct" => 0
                    ]
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
                    ]
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
                    ]
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
                            "en" => "Steal your private or work information",
                            "ar" => "سرقة معلوماتك الشخصيّة، أو معلومات العمل الخاصّة بك."
                        ],
                        "is_correct" => 1
                    ]
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
                    ]
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
                            "en" => "Your nickname​",
                            "ar" => "اسمك المُستعار."
                        ],
                        "is_correct" => 1
                    ]
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
                    ]
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
                    ]
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
                    ]
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
                    ]
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
                    ]
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
                    ]
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
                    ]
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
                    ]
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
                    ]
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
                            "en" => "Different from your other passwords​",
                            "ar" => "مختلفة عن كلمات المرور الأخرى الخاصّة بك.​"
                        ],
                        "is_correct" => 1
                    ]
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
                    ]
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
                    ]
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
                            "en" => "Not sharing personal information on social media.",
                            "ar" => "عدم مشاركة معلوماتك الشخصيّة على وسائل التواصل الاجتماعيّ."
                        ],
                        "is_correct" => 1
                    ]
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
                    ]
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
                    ]
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
                    ]
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
                            "en" => "I should verify that mail with my friend. Maybe he’s a victim of malicious attack​",
                            "ar" => "يجب عليّ التحقق من هذا البريد مع صديقي؛ ربما يكون ضحيّة لهجمة برامج ضارّة."
                        ],
                        "is_correct" => 1
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
                            "en" => "Look at the email headers to check the source IP address.​",
                            "ar" => "النظر إلى عنوان البريد الإلكتروني للتحقق من عنوان بروتوكول الإنترنت المصدر."
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
                    ]
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
                    ]
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
                    ]
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
                    ]
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
                    ]
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
                    ]
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
                            "en" => "Always backup the data in the laptop before traveling. ​",
                            "ar" => "إجراء نسخ احتياطيّ دائمًا للبيانات الموجودة على الكمبيوتر المحمول قبل السفر."
                        ],
                        "is_correct" => 1
                    ]
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
                    ]
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
                    ]
                ]
            ],
        ];
        foreach($questions as $question){

            $item_q = \App\Models\BasketBallQuestion::updateOrCreate([
                'question' => $question['question']
            ]
            );
            foreach($question['answers'] as $answer)
            {
                $item_a = \App\Models\BasketBallAnswer::updateOrCreate([
                'question_id'=>$item_q->id,
                'answer'=>$answer['answer'],
                'is_correct' => $answer['is_correct']
                ]);
            }
            
        }
    }
}
