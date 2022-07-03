<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(GameSeeder::class);
        $this->call(MillionairCategorySeeder::class);
        $this->call(MillionairQuestionTypeSeeder::class);
        $this->call(MillionaireQandA::class);
        $this->call(BasketballQandA::class);
        $this->call(PhishingAttachmentTypeSeeder::class);
        $this->call(AnalyticsTemplateSeeder::class);
        $this->call(DominosTemplateSeeder::class);
        $this->call(AnalyticsTemplateEnglishSeeder::class);
        $this->call(FacebookLoginEnglishTemplateSeeder::class);
        $this->call(FacebookLoginArabicTemplateSeeder::class);
        $this->call(AppleLoginEnglishTemplateSeeder::class);
        $this->call(BaaedTemplateSeeder::class);
        $this->call(PaypalConfirmationEnglishTemplateSeeder::class);
        $this->call(PaypalFeedbackEnglishTemplateSeeder::class);
        $this->call(NikeEnglishTemplateSeeder::class);
        $this->call(NikeArabicTemplateSeeder::class);
        $this->call(CakeTemplateSeeder::class);
        $this->call(FCIPEnglishTemplateSeeder::class);
        $this->call(AirmailEnglishTemplateSeeder::class);
        $this->call(EverifyArabicTemplateSeeder::class);
        $this->call(HMEnglishTemplateSeeder::class);
        $this->call(DuolingoAnalyticsTemplateSeeder::class);
        $this->call(FacebookTemplateSeeder::class);
        $this->call(FamilyTemplateSeeder::class);
        $this->call(GoogleTemplateSeeder::class);
        $this->call(HasoubTemplateSeeder::class);
        //$this->call(SuggestionsTemplateSeeder::class);
        $this->call(UdacityTemplateSeeder::class);
        $this->call(BaaedRealTemplateSeeder::class);
        $this->call(CakeRealTemplateSeeder::class);
        $this->call(DominosRealTemplateSeeder::class);
        $this->call(DuolingoAnalyticsRealTemplateSeeder::class);
        $this->call(FacebookRealTemplateSeeder::class);
        $this->call(FamilyRealTemplateSeeder::class);
        $this->call(GoogleRealTemplateSeeder::class);
        $this->call(HasoubRealTemplateSeeder::class);
        //$this->call(SuggestionsRealTemplateSeeder::class);
        $this->call(PhotoshopIpadEnglishSeeder::class);
        $this->call(PhotoshopIpadArabicSeeder::class);
        $this->call(FashionEnglishSeeder::class);
        $this->call(FashionArabicSeeder::class);
        $this->call(FashionIillyeaEnglishSeeder::class);
        $this->call(AmazonTemplateSeeder::class);
        $this->call(AmazonFakeTemplateSeeder::class);
        $this->call(DMallTemplateSeeder::class);
        $this->call(DMallFakeTemplateSeeder::class);
        $this->call(DonateTemplateSeeder::class);
        $this->call(DonateFakeTemplateSeeder::class);
        $this->call(KasperskyTemplateSeeder::class);
        $this->call(KasperskyFakeTemplateSeeder::class);
        $this->call(Marj3TemplateSeeder::class);
        $this->call(Marj3FakeTemplateSeeder::class);
        $this->call(UdacityFakeTemplateSeeder::class);
        $this->call(UdacityTemplateSeeder::class);
        $this->call(AccountRealTemplateSeeder::class);
        $this->call(AnnouncementsRealTemplateSeeder::class);
        $this->call(BbcRealTemplateSeeder::class);
        $this->call(JumiaRealTemplateSeeder::class);
        $this->call(NetflixRealTemplateSeeder::class);
        $this->call(PaypalARealTemplateSeeder::class);
        $this->call(PaypalBRealTemplateSeeder::class);
        $this->call(SoundRealTemplateSeeder::class);
        $this->call(AccountFakeTemplateSeeder::class);
        $this->call(AnnouncementsFakeTemplateSeeder::class);
        $this->call(BbcFakeTemplateSeeder::class);
        $this->call(JumiaFakeTemplateSeeder::class);
        $this->call(NetflixFakeTemplateSeeder::class);
        $this->call(PaypalAFakeTemplateSeeder::class);
        $this->call(PaypalBFakeTemplateSeeder::class);
        $this->call(SoundFakeTemplateSeeder::class);

    }
}
