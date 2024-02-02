<?php

use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/', 'HomeController@index')->name('home');


// Login
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Register
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Reset Password
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Confirm Password
Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

// Verify Email
// Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
// Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

//forget password
Route::get('/forget-password/enter-mail', 'Dashboard\DashboardController@mail_page')->name('enter.mail.page');
 Route::post('forget-password/code-generated', 'Dashboard\DashboardController@code_gen')->name('email.entered.code.generate');
Route::get('forget-password/email-verify/{id}/{vcode}','Dashboard\DashboardController@resetPassowrd')->name('forget.password.email.verify');
Route::post('forget-password/new-password','Dashboard\DashboardController@newPassword')->name('reset.new.password');








Route::group(['middleware' => ['admin.auth:admin']], function() {  

//dashboard
Route::get('/dashboard', 'Dashboard\DashboardController@dashboard')->name('dashboard.home');

//edit profile
Route::get('/edit-profile','Dashboard\DashboardController@edit_view')->name('edit.view');
Route::post('/update-profile','Dashboard\DashboardController@update')->name('update.admin');


 //banner Management
  Route::get('/banner-management','Banner\BannerManagement@banner_page')->name('banner.page');
  Route::post('check', 'Banner\BannerManagement@imgcheck')->name('check.img');
 Route::post('/banner-management/upload', 'Banner\BannerManagement@upload_banner')->name('upload.banner');
Route::get('/banner-management/del/{id}','Banner\BannerManagement@text_del')->name('banner.texr.del');


 //card content 1
  Route::get('/per-business-management','Card\ContentManagement@content_page')->name('content.page');
 Route::post('/per-business-management/upload', 'Card\ContentManagement@upload_content')->name('upload.content');

 //card Category
  Route::get('/punch-lines-management','Card\ContentManagement@cat_list')->name('cat.list');
 Route::get('/punch-lines-management/edit/{id}','Card\ContentManagement@cat_edit')->name('cat.edit');
 Route::post('/punch-lines-management/update','Card\ContentManagement@cat_update')->name('cat.update');


 //content 2 with image(two)
  Route::get('/advantage-digital-card-management','Card\ContentManagement@content_two_list')->name('content.two.list');
  Route::get('/advantage-digital-card-management/edit/{id}','Card\ContentManagement@content_two_edit')->name('content.two.edit');
 Route::post('/advantage-digital-card-management/update','Card\ContentManagement@content_two_update')->name('content.two.update');
  Route::get('/advantage-digital-card-management/view/{id}','Card\ContentManagement@content_two_view')->name('content.two.view');


  //Insdustrial Logo management
Route::get('/manage-industry-logo','IndustryLogo\InsdustryLogoController@logo_list')->name('logo.list');
Route::get('/manage-industry-logo/add','IndustryLogo\InsdustryLogoController@logo_add_page')->name('logo.add.page');
Route::post('/manage-industry-logo/insert','IndustryLogo\InsdustryLogoController@logo_ins')->name('insert.logo');
Route::get('manage-industry-logo/active/{id}', 'IndustryLogo\InsdustryLogoController@active')->name('logos.active');
Route::get('manage-industry-logo/inactive/{id}', 'IndustryLogo\InsdustryLogoController@inactive')->name('logos.inactive');
Route::get('manage-industry-logo/delete/{id}', 'IndustryLogo\InsdustryLogoController@delete')->name('logos.delete');
Route::get('manage-industry-logo/edit/{id}', 'IndustryLogo\InsdustryLogoController@edit_form')->name('logos.edit');
Route::post('manage-industry-logo/update', 'IndustryLogo\InsdustryLogoController@update_logo')->name('update.logo');




//Template management
Route::get('/manage-template','Template\TemplateController@temp_list')->name('temp.list');
Route::get('/manage-template/add','Template\TemplateController@temp_add_page')->name('temp.add.page');
Route::post('/manage-template/insert','Template\TemplateController@temp_ins')->name('insert.temp');
Route::get('manage-template/active/{id}', 'Template\TemplateController@active')->name('temps.active');
Route::get('manage-template/inactive/{id}', 'Template\TemplateController@inactive')->name('temps.inactive');
Route::get('manage-template/delete/{id}', 'Template\TemplateController@delete')->name('temps.delete');
Route::get('manage-template/edit/{id}', 'Template\TemplateController@edit_form')->name('temps.edit');
Route::post('manage-template/update', 'Template\TemplateController@update_temp')->name('update.temp');
Route::get('manage-template/view/{id}', 'Template\TemplateController@view_temp')->name('temp.view');



//material type
Route::get('/manage-material-type','Template\TemplateController@mat_list')->name('mat.list');
Route::get('/manage-material-type/add','Template\TemplateController@mat_add_page')->name('mat.add.page');
Route::post('/manage-material-type/insert','Template\TemplateController@mat_ins')->name('insert.mat');
Route::get('manage-material-type/active/{id}', 'Template\TemplateController@mat_active')->name('mat.active');
Route::get('manage-material-type/inactive/{id}', 'Template\TemplateController@mat_inactive')->name('mat.inactive');
Route::get('manage-material-type/delete/{id}', 'Template\TemplateController@mat_delete')->name('mat.delete');
Route::get('manage-material-type/edit/{id}', 'Template\TemplateController@mat_edit_form')->name('mat.edit');
Route::post('manage-material-type/update', 'Template\TemplateController@update_mat')->name('update.mat');
//Route::get('manage-template/view/{id}', 'Template\TemplateController@view_temp')->name('temp.view');




//print requests
Route::get('/print-request/list','PrintPart\PrintController@print_list')->name('print.list');
Route::get('/print-request/all-print-request-cards/{id}','PrintPart\PrintController@all_req_print_list')->name('all.print.req.card.list');
Route::get('/print-request/completed-print/{id}','PrintPart\PrintController@completed_print')->name('completed.print');
Route::get('/print-request/print-card/{id}','PrintPart\PrintController@print_card')->name('print.card');
Route::get('/print-request/view-details/{id}','PrintPart\PrintController@view_details')->name('view.print.details');
Route::get('/print-request/delivery-address-details/{id}','PrintPart\PrintController@view_address_details')->name('view.print.address.details');


//user added template
Route::get('/user-added-template/list','Template\TemplateController@temp_added_by_user')->name('user.added.temp');



//footer management
Route::get('/footer-management', 'Footer\FooterController@footer_page')->name('footer.page');
Route::post('/footer-management/update', 'Footer\FooterController@footer_upd')->name('upload.footer');


//download
  Route::get('/download/{id}','Footer\FooterController@download')->name('temp.download.one');
  Route::get('/download/2/{id}','Footer\FooterController@download_2')->name('temp.download.two');


//ADD HTML
  Route::get('/manage-html','Html\HtmlController@html_list')->name('html.list');
Route::get('/manage-html/add','Html\HtmlController@html_add_page')->name('add.html.page');
Route::post('/manage-html/insert','Html\HtmlController@insert')->name('insert.html');
Route::get('/manage-html/delete/{id}','Html\HtmlController@delete')->name('html.del');
Route::get('/manage-html/active/{id}','Html\HtmlController@active')->name('html.active');
Route::get('/manage-html/inactive/{id}','Html\HtmlController@inactive')->name('html.inactive');
Route::get('/manage-html/view/{id}','Html\HtmlController@view')->name('html.view');
Route::get('/manage-html/edit/{id}','Html\HtmlController@edit_page')->name('html.edit');
Route::post('/manage-html/update','Html\HtmlController@html_update')->name('update.html');





// personal card reprint
Route::get('/manage-reprint','RePrint\ReprintRequestController@re_print_list')->name('reprint.list');
Route::get('/manage-reprint/print/{id}','RePrint\ReprintRequestController@do_print')->name('re.print');
Route::get('/manage-reprint/view/{id}','RePrint\ReprintRequestController@view_details')->name('view.reprint');



//corporate print part
Route::get('/corporate-print-request/list','Corporate\CorporateController@print_list')->name('corp.print.list');
Route::get('/corporate-print-request/all-print-request-cards/{id}','Corporate\CorporateController@all_req_print_list')->name('corp.all.print.req.card.list');
Route::get('/corporate-print-request/completed-print/{id}','Corporate\CorporateController@completed_print')->name('corp.completed.print');
Route::get('/corporate-print-request/print-card/{id}','Corporate\CorporateController@print_card')->name('corp.print.card');
Route::get('/corporate-print-request/view-details/{id}','Corporate\CorporateController@view_details')->name('corp.view.print.details');


//card price list
Route::get('/card-price/list','CardPrice\CardPriceController@price_list')->name('price.list');
Route::get('/card-price/add-price','CardPrice\CardPriceController@add_price_page')->name('price.add.page');
Route::post('/card-price/insert-price','CardPrice\CardPriceController@ins_card_price')->name('insert.card.price');
Route::get('/card-price/edit-price/{id}','CardPrice\CardPriceController@edit_price_page')->name('card.price.edit');
Route::post('/card-price/update-price','CardPrice\CardPriceController@update_card_price')->name('update.card.price');
Route::get('/card-price/delete/{id}','CardPrice\CardPriceController@delete')->name('card.price.delete');

    // faq-management
    Route::get('manage-faq','Faq\FaqController@index')->name('manage.faq');
    Route::get('manage-faq/add','Faq\FaqController@addView')->name('manage.faq.add.view');
    Route::post('manage-faq/insert','Faq\FaqController@insert')->name('manage.faq.insert');
    Route::get('manage-faq/edit/{id}','Faq\FaqController@edit')->name('manage.faq.edit');
    Route::post('manage-faq/update','Faq\FaqController@update')->name('manage.faq.update');
    Route::get('manage-faq/delete/{id}','Faq\FaqController@delete')->name('manage.faq.delete');
    Route::get('manage-faq/status/{id}','Faq\FaqController@status')->name('manage.faq.status');

    // contact-management
    Route::get('contact-management','Contact\ContactController@index')->name('manage.contact');
    Route::get('contact-management/details/{id}','Contact\ContactController@details')->name('manage.contact.details');
    Route::get('contact-management/delete/{id}','Contact\ContactController@delete')->name('manage.contact.delete');

    // manage-payment-logs
    Route::get('manage-payment-logs','Logs\LogsController@index')->name('manage.payment.logs');



//card subscription list
Route::get('/subscription-management/list','Subs\SubscriptionController@subscription_list')->name('subscription.list');
Route::get('/subscription-management/add-subscription','Subs\SubscriptionController@add_subscription_page')->name('subscription.add.page');
Route::post('/subscription-management/insert-subscription','Subs\SubscriptionController@ins_card_subscription')->name('insert.card.subscription');
Route::get('/subscription-management/edit-subscription/{id}','Subs\SubscriptionController@edit_subscription_page')->name('card.subscription.edit');
Route::post('/subscription-management/update-subscription','Subs\SubscriptionController@update_card_subscription')->name('update.card.subscription');
Route::get('/subscription-management/delete/{id}','Subs\SubscriptionController@delete')->name('card.subscription.delete');



//srv part start

//blog
Route::get('/manage-blog','Srv\Blog\BlogController@blog_list')->name('blog.list');
Route::get('/manage-blog/add','Srv\Blog\BlogController@blog_add_page')->name('blog.add.page');
Route::post('/manage-blog/insert','Srv\Blog\BlogController@blog_ins')->name('insert.blog');
Route::get('manage-blog/active/{id}', 'Srv\Blog\BlogController@active')->name('blog.active');
Route::get('manage-blog/inactive/{id}', 'Srv\Blog\BlogController@inactive')->name('blog.inactive');
Route::get('manage-blog/delete/{id}', 'Srv\Blog\BlogController@delete')->name('blog.delete');
Route::get('manage-blog/edit/{id}', 'Srv\Blog\BlogController@edit_form')->name('blog.edit');
Route::post('manage-blog/update', 'Srv\Blog\BlogController@update_blog')->name('update.blog');
Route::get('manage-blog/view/{id}', 'Srv\Blog\BlogController@view_blog')->name('blog.view');



//portfolio
Route::get('/manage-portfolio','Srv\Portfolio\PortfolioController@portfolio_list')->name('portfolio.list');
Route::get('/manage-portfolio/add','Srv\Portfolio\PortfolioController@portfolio_add_page')->name('portfolio.add.page');
Route::post('/manage-portfolio/insert','Srv\Portfolio\PortfolioController@portfolio_ins')->name('insert.portfolio');
Route::get('manage-portfolio/active/{id}', 'Srv\Portfolio\PortfolioController@active')->name('portfolio.active');
Route::get('manage-portfolio/inactive/{id}', 'Srv\Portfolio\PortfolioController@inactive')->name('portfolio.inactive');
Route::get('manage-portfolio/delete/{id}', 'Srv\Portfolio\PortfolioController@delete')->name('portfolio.delete');
Route::get('manage-portfolio/edit/{id}', 'Srv\Portfolio\PortfolioController@edit_form')->name('portfolio.edit');
Route::post('manage-portfolio/update', 'Srv\Portfolio\PortfolioController@update_portfolio')->name('update.portfolio');
Route::get('manage-portfolio/view/{id}', 'Srv\Portfolio\PortfolioController@view_portfolio')->name('portfolio.view');



//review
Route::get('/manage-review','Srv\ClintReview\ReviewController@review_list')->name('review.list');
Route::get('/manage-review/add','Srv\ClintReview\ReviewController@review_add_page')->name('review.add.page');
Route::post('/manage-review/insert','Srv\ClintReview\ReviewController@review_ins')->name('insert.review');
Route::get('manage-review/active/{id}', 'Srv\ClintReview\ReviewController@active')->name('review.active');
Route::get('manage-review/inactive/{id}', 'Srv\ClintReview\ReviewController@inactive')->name('review.inactive');
Route::get('manage-review/delete/{id}', 'Srv\ClintReview\ReviewController@delete')->name('review.delete');
Route::get('manage-review/edit/{id}', 'Srv\ClintReview\ReviewController@edit_form')->name('review.edit');
Route::post('manage-review/update', 'Srv\ClintReview\ReviewController@update_review')->name('update.review');
Route::get('manage-review/view/{id}', 'Srv\ClintReview\ReviewController@view_review')->name('review.view');






});

Route::get('/corporate-card/{id}/{name}','Card\ContentManagement@corp_card_link')->name('corp.card.link');
Route::get('/personal-card/{id}/{name}','Card\ContentManagement@personal_card_link')->name('per.card.link');


