<?php

namespace Modules\LandingPage\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\LandingPage\Entities\LandingPageSetting;

class LandingPageDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");

        $data['topbar_status'] = 'on';
        $data['topbar_notification_msg'] = '70% Special Offer. Don’t Miss it. The offer ends in 72 hours.';

        $data['menubar_status'] = 'on';
        $data['menubar_page'] = '[{"menubar_page_name": "About Us","template_name": "page_content","page_url": "","menubar_page_contant": "Welcome to the Erpgo website. By accessing this website, you agree to comply with and be bound by the following terms and conditions of use. If you disagree with any part of these terms, please do not use our website. The content of the pages of this website is for your general information and use only. It is subject to change without notice. This website uses cookies to monitor browsing preferences. If you do allow cookies to be used, personal information may be stored by us for use by third parties. Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness, or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors, and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law. Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services, or information available through this website meet your specific requirements. This website contains material that is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance, and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions. Unauthorized use of this website may give rise to a claim for damages and\/or be a criminal offense. From time to time, this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s","page_slug": "about_us","header": "on","footer": "on","login": "on"},{"menubar_page_name": "Terms and Conditions","template_name": "page_content","page_url": "","menubar_page_contant": "Welcome to the Erpgo website. By accessing this website, you agree to comply with and be bound by the following terms and conditions of use. If you disagree with any part of these terms, please do not use our website.\r\n\r\nThe content of the pages of this website is for your general information and use only. It is subject to change without notice.\r\n\r\nThis website uses cookies to monitor browsing preferences. If you do allow cookies to be used, personal information may be stored by us for use by third parties.\r\n\r\nNeither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness, or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors, and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.\r\n\r\nYour use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services, or information available through this website meet your specific requirements.\r\n\r\nThis website contains material that is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance, and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.\r\n\r\nUnauthorized use of this website may give rise to a claim for damages and\/or be a criminal offense.\r\n\r\nFrom time to time, this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).","page_slug": "terms_and_conditions","header": "off","footer": "on","login": "on"},{"menubar_page_name": "Privacy Policy","template_name": "page_content","page_url": "","menubar_page_contant": "Introduction: An overview of the privacy policy, including the purpose and scope of the policy. Information Collection: Details about the types of information collected from users\/customers, such as personal information (name, address, email), device information, usage data, and any other relevant data. Data Usage: An explanation of how the collected data will be used, including providing services, improving products, personalization, analytics, and any other legitimate business purposes. Data Sharing: Information about whether and how the company shares user data with third parties, such as partners, service providers, or affiliates, along with the purposes of such sharing. Data Security: Details about the measures taken to protect user data from unauthorized access, loss, or misuse, including encryption, secure protocols, access controls, and data breach notification procedures. User Choices: Information on the choices available to users regarding the collection, use, and sharing of their personal data, including opt-out mechanisms and account settings. Cookies and Tracking Technologies: Explanation of the use of cookies, web beacons, and similar technologies for tracking user activity and collecting information for analytics and advertising purposes. Third-Party Links: Clarification that the companys website or services may contain links to third-party websites or services and that the privacy policy does not extend to those external sites. Data Retention: Details about the retention period for user data and how long it will be stored by the company. Legal Basis and Compliance: Information about the legal basis for processing personal data, compliance with applicable data protection laws, and the rights of users under relevant privacy regulations (e.g., GDPR, CCPA). Updates to the Privacy Policy: Notification that the privacy policy may be updated from time to time, and how users will be informed of any material changes. Contact Information: How users can contact the company regarding privacy-related concerns or inquiries.","page_slug": "privacy_policy","header": "off","footer": "on","login": "on"}]';

        $data['site_logo'] = 'site_logo.png';
        $data['site_description'] = 'We build modern web tools to help you jump-start your daily business work.';
        $data['home_status'] = 'on';
        $data['home_offer_text'] = '70% Special Offer';
        $data['home_title'] = 'Home';
        $data['home_heading'] = 'ERPGo SaaS All In One Business ERP With Project, Account, HRM, CRM & POS';
        $data['home_description'] = 'Use these awesome forms to login or create new account in your project for free.';
        $data['home_trusted_by'] = '1000+ Customer';
        $data['home_live_demo_link'] = 'https://demo.workdo.io/erpgo-saas/login';
        $data['home_buy_now_link'] = 'https://codecanyon.net/item/erpgo-saas-all-in-one-business-erp-with-project-account-hrm-crm-pos/33263426';
        $data['home_banner'] = 'home_banner.png';
        $data['home_logo'] = 'home_logo1.png,home_logo2.png,home_logo3.png,home_logo4.png,home_logo5.png,home_logo6.png,home_logo7.png';

        $data['feature_status'] = 'on';
        $data['feature_title'] = 'Features';
        $data['feature_heading'] = 'All In One Place CRM System';
        $data['feature_description'] = 'Use these awesome forms to login or create new account in your project for free. Use these awesome forms to login or create new account in your project for free.';
        $data['feature_buy_now_link'] = 'https://codecanyon.net/item/erpgo-saas-all-in-one-business-erp-with-project-account-hrm-crm-pos/33263426';
        $data['feature_of_features'] = '[{"feature_logo":"1688108756-feature_logo.png","feature_heading":"Feature","feature_description":"<p>Use these awesome forms to login or create new account in your project for free.Use these awesome forms to login or create new account in your project for free.<\/p>"},{"feature_logo":"1688099120-feature_logo.png","feature_heading":"Support","feature_description":"<p>Use these awesome forms to login or create new account in your project for free.Use these awesome forms to login or create new account in your project for free.<\/p>"},{"feature_logo":"1688099197-feature_logo.png","feature_heading":"Integration","feature_description":"<p>Use these awesome forms to login or create new account in your project for free.Use these awesome forms to login or create new account in your project for free.<\/p>"}]';

        $data['highlight_feature_heading'] = 'ERPGo SaaS All In One Business ERP With Project, Account, HRM, CRM & POS';
        $data['highlight_feature_description'] = 'Use these awesome forms to login or create new account in your project for free.';
        $data['highlight_feature_image'] = 'highlight_feature_image.png';
        $data['other_features'] = '[{"other_features_image":"1688108824-other_features_image.png","other_features_heading":"ERPGo SaaS All In One Business ERP With Project, Account, HRM, CRM & POS","other_featured_description":"<p>Use these awesome forms to login or create new account in your project for free.<\/p>","other_feature_buy_now_link":"https://codecanyon.net/item/erpgo-saas-all-in-one-business-erp-with-project-account-hrm-crm-pos/33263426"},{"other_features_image":"1688108842-other_features_image.png","other_features_heading":"ERPGo SaaS All In One Business ERP With Project, Account, HRM, CRM & POS","other_featured_description":"<p>Use these awesome forms to login or create new account in your project for free.<\/p>","other_feature_buy_now_link":"https://codecanyon.net/item/erpgo-saas-all-in-one-business-erp-with-project-account-hrm-crm-pos/33263426"},{"other_features_image":"1688115908-other_features_image.png","other_features_heading":"ERPGo SaaS All In One Business ERP With Project, Account, HRM, CRM & POS","other_featured_description":"<p>Use these awesome forms to login or create new account in your project for free.<\/p>","other_feature_buy_now_link":"https://codecanyon.net/item/erpgo-saas-all-in-one-business-erp-with-project-account-hrm-crm-pos/33263426"},{"other_features_image":"1688108947-other_features_image.png","other_features_heading":"ERPGo SaaS All In One Business ERP With Project, Account, HRM, CRM & POS","other_featured_description":"<p>Use these awesome forms to login or create new account in your project for free.<\/p>","other_feature_buy_now_link":"https://codecanyon.net/item/erpgo-saas-all-in-one-business-erp-with-project-account-hrm-crm-pos/33263426"}]';

        $data['discover_status'] = 'on';
        $data['discover_heading'] = 'ERPGo SaaS All In One Business ERP With Project, Account, HRM, CRM & POS';
        $data['discover_description'] = 'Use these awesome forms to login or create new account in your project for free.';
        $data['discover_live_demo_link'] = 'https://demo.workdo.io/erpgo-saas/login';
        $data['discover_buy_now_link'] = 'https://codecanyon.net/item/erpgo-saas-all-in-one-business-erp-with-project-account-hrm-crm-pos/33263426';
        $data['discover_of_features'] = '[{"discover_logo":"1688099306-discover_logo.png","discover_heading":"Feature","discover_description":"<p>Use these awesome forms to login or create new account in your project for free.Use these awesome forms to login or create new account in your project for free.<\/p>"},{"discover_logo":"1688099328-discover_logo.png","discover_heading":"Feature","discover_description":"<p>Use these awesome forms to login or create new account in your project for free.Use these awesome forms to login or create new account in your project for free.<\/p>"},{"discover_logo":"1688099359-discover_logo.png","discover_heading":"Feature","discover_description":"<p>Use these awesome forms to login or create new account in your project for free.Use these awesome forms to login or create new account in your project for free.<\/p>"},{"discover_logo":"1688099377-discover_logo.png","discover_heading":"Feature","discover_description":"<p>Use these awesome forms to login or create new account in your project for free.Use these awesome forms to login or create new account in your project for free.<\/p>"},{"discover_logo":"1688099401-discover_logo.png","discover_heading":"Feature","discover_description":"<p>Use these awesome forms to login or create new account in your project for free.Use these awesome forms to login or create new account in your project for free.<\/p>"},{"discover_logo":"1688099416-discover_logo.png","discover_heading":"Feature","discover_description":"<p>Use these awesome forms to login or create new account in your project for free.Use these awesome forms to login or create new account in your project for free.<\/p>"},{"discover_logo":"1688099434-discover_logo.png","discover_heading":"Feature","discover_description":"<p>Use these awesome forms to login or create new account in your project for free.Use these awesome forms to login or create new account in your project for free.<\/p>"},{"discover_logo":"1688099443-discover_logo.png","discover_heading":"Feature","discover_description":"<p>Use these awesome forms to login or create new account in your project for free.Use these awesome forms to login or create new account in your project for free.<\/p>"}]';

        $data['screenshots_status'] = 'on';
        $data['screenshots_heading'] = 'ERPGo SaaS All In One Business ERP With Project, Account, HRM, CRM & POS';
        $data['screenshots_description'] = 'Use these awesome forms to login or create new account in your project for free.';
        $data['screenshots'] = '[{"screenshots":"1688109087-screenshots.png","screenshots_heading":"Balance Sheet"},{"screenshots":"1688109104-screenshots.png","screenshots_heading":"Budget Plan"},{"screenshots":"1688100981-screenshots.png","screenshots_heading":"CRM Deals"},{"screenshots":"1688109222-screenshots.png","screenshots_heading":"Project"},{"screenshots":"1688108614-screenshots.png","screenshots_heading":"Job Career"},{"screenshots":"1688108626-screenshots.png","screenshots_heading":"POS"}]';

        $data['plan_status'] = 'on';
        $data['plan_title'] = 'Plan';
        $data['plan_heading'] = 'ERPGo SaaS All In One Business ERP With Project, Account, HRM, CRM & POS';
        $data['plan_description'] = 'Use these awesome forms to login or create new account in your project for free.';

        $data['faq_status'] = 'on';
        $data['faq_title'] = 'Faq';
        $data['faq_heading'] = 'ERPGo SaaS All In One Business ERP With Project, Account, HRM, CRM & POS';
        $data['faq_description'] = 'Use these awesome forms to login or create new account in your project for free.';
        $data['faqs'] = '[{"faq_questions":"#What does \"Theme\/Package Installation\" mean?","faq_answer":"For an easy-to-install theme\/package, we have included step-by-step detailed documentation (in English). However, if it is not done perfectly, please feel free to contact the support team at support@workdo.io"},{"faq_questions":"#What does \"Theme\/Package Installation\" mean?","faq_answer":"For an easy-to-install theme\/package, we have included step-by-step detailed documentation (in English). However, if it is not done perfectly, please feel free to contact the support team at support@workdo.io"},{"faq_questions":"#What does \"Lifetime updates\" mean?","faq_answer":"For an easy-to-install theme\/package, we have included step-by-step detailed documentation (in English). However, if it is not done perfectly, please feel free to contact the support team at support@workdo.io"},{"faq_questions":"#What does \"Lifetime updates\" mean?","faq_answer":"For an easy-to-install theme\/package, we have included step-by-step detailed documentation (in English). However, if it is not done perfectly, please feel free to contact the support team at support@workdo.io"},{"faq_questions":"# What does \"6 months of support\" mean?","faq_answer":"Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa\r\n                                    nesciunt\r\n                                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt\r\n                                    sapiente ea\r\n                                    proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven heard of them accusamus labore sustainable VHS."},{"faq_questions":"# What does \"6 months of support\" mean?","faq_answer":"Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa\r\n                                    nesciunt\r\n                                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt\r\n                                    sapiente ea\r\n                                    proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven heard of them accusamus labore sustainable VHS."}]';

        $data['testimonials_status'] = 'on';
        $data['testimonials_heading'] = 'From our Clients';
        $data['testimonials_description'] = 'Use these awesome forms to login or create new account in your project for free.';
        $data['testimonials_long_description'] = 'WorkDo seCommerce package offers you a “sales-ready.”secure online store. The package puts all the key pieces together, from design to payment processing. This gives you a headstart in your eCommerce venture. Every store is built using a reliable PHP framework -laravel. Thisspeeds up the development process while increasing the store’s security and performance.Additionally, thanks to the accompanying mobile app, you and your team can manage the store on the go. What’s more, because the app works both for you and your customers, you can use it to reach a wider audience.And, unlike popular eCommerce platforms, it doesn’t bind you to any terms and conditions or recurring fees. You get to choose where you host it or which payment gateway you use. Lastly, you getcomplete control over the looks of the store. And if it lacks any functionalities that you need, just reach out, and let’s discuss customization possibilities';
        $data['testimonials'] = '[{"testimonials_user_avtar":"1688466247-testimonials_user_avtar.jpg","testimonials_title":"Tbistone","testimonials_description":"Very quick customer support, installing this application on my machine locally, within 5 minutes of creating a ticket, the developer was able to fix the issue I had within 10 minutes. EXCELLENT! Thank you very much","testimonials_user":"Chordsnstrings","testimonials_designation":"from codecanyon","testimonials_star":"4"},{"testimonials_user_avtar":"1688466264-testimonials_user_avtar.jpg","testimonials_title":"Tbistone","testimonials_description":"Very quick customer support, installing this application on my machine locally, within 5 minutes of creating a ticket, the developer was able to fix the issue I had within 10 minutes. EXCELLENT! Thank you very much","testimonials_user":"Chordsnstrings","testimonials_designation":"from codecanyon","testimonials_star":"4"},{"testimonials_user_avtar":"1688466271-testimonials_user_avtar.jpg","testimonials_title":"Tbistone","testimonials_description":"Very quick customer support, installing this application on my machine locally, within 5 minutes of creating a ticket, the developer was able to fix the issue I had within 10 minutes. EXCELLENT! Thank you very much","testimonials_user":"Chordsnstrings","testimonials_designation":"from codecanyon","testimonials_star":"4"}]';

        $data['footer_status'] = 'on';
        $data['joinus_status'] = 'on';
        $data['joinus_heading'] = 'Join Our Community';
        $data['joinus_description'] = 'We build modern web tools to help you jump-start your daily business work.';


        foreach($data as $key => $value){
            if(!LandingPageSetting::where('name', '=', $key)->exists()){
                LandingPageSetting::updateOrCreate(['name' =>  $key],['value' => $value]);
            }
        }
    }
}
