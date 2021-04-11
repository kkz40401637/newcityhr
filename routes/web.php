<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
Route::group(['middleware' => 'auth','ban','permission'], function() {

    // Universal Security routing ..........
//    Route::post('RealTimeCheckAuthStatus','GeneralUserController@RealTimeCheckAuthStatus')->name('RealTimeCheckAuthStatus');


    Route::get('/','DashboardController@AdminDashboard')->name('AdminDashboard');

        Route::post('SearchStationInOnchange','StationController@SearchStationInOnchange')->name('SearchStationInOnchange');

        Route::group(['prefix'=>'role'], function(){
            Route::get('/','RoleController@RoleList')->name('RoleList');
            Route::get('/add','RoleController@AddRole')->name('AddRole');
            Route::post('/add','RoleController@SaveRole')->name('SaveRole');
            Route::get('/{Token}/edit','RoleController@EditRoleInfo')->name('EditRoleInfo');
            Route::post('/{Token}/edit','RoleController@UpdateRoleInfo')->name('UpdateRoleInfo');
        });
        Route::group(['prefix'=>'department'], function(){
            Route::get('/','DepartmentController@DepartmentList')->name('DepartmentList');
            Route::get('/add','DepartmentController@AddDepartmentList')->name('AddDepartmentList');
            Route::post('/AddDepartmentStore','DepartmentController@AddDepartmentStore')->name('AddDepartmentStore');
            Route::get('/{Token}/edit','DepartmentController@EditDepartmentInfo')->name('EditDepartmentInfo');
            Route::post('/{Token}/edit','DepartmentController@UpdateDepartmentInfo')->name('UpdateDepartmentInfo');
            Route::post('/change/department/status', 'DepartmentController@DepartmentStatusChange')->name('DepartmentStatusChange');
        });
        Route::group(['prefix'=>'company'], function(){
            Route::get('/','CompanyController@index')->name('Company');
            Route::get('/add','CompanyController@AddCompany')->name('AddCompany');
            Route::post('/SaveCompanyInfo','CompanyController@SaveCompanyInfo')->name('SaveCompanyInfo');
            Route::get('/{Token}/edit','CompanyController@EditCompanyInfo')->name('EditCompanyInfo');
            Route::post('/update/{Token}','CompanyController@UpdateCompanyInfo')->name('UpdateCompanyInfo');
        });
        Route::group(['prefix'=>'business_unit'], function(){
            Route::get('/','BusinessUnitController@index')->name('BusinessUnit');
            Route::get('/add','BusinessUnitController@AddBusinessUnit')->name('AddBusinessUnit');
            Route::post('/SaveCompanyInfo','BusinessUnitController@SaveBusinessUnitInfo')->name('SaveBusinessUnitInfo');
//            Route::get('/{Token}/edit','BusinessUnitController@EditCompanyInfo')->name('EditCompanyInfo');
//            Route::post('/update/{Token}','BusinessUnitController@UpdateCompanyInfo')->name('UpdateCompanyInfo');
        });
        Route::group(['prefix'=>'branch'], function(){
            Route::get('/','StationController@StationList')->name('StationList');
            Route::get('/add','StationController@AddStation')->name('AddStation');
            Route::post('/SaveStationInfo','StationController@SaveStationInfo')->name('SaveStationInfo');
            Route::post('/change/station/status', 'StationController@StationStatusChange')->name('StationStatusChange');
            Route::get('/{token}/edit/', 'StationController@EditStationInfo')->name('EditStation');
            Route::post('UpdateStationInfo', 'StationController@UpdateStationInfo')->name('UpdateStationInfo');
        });
        Route::group(['prefix'=>'account'], function(){
            Route::get('/', 'RegisterController@UserList')->name('UserList');
            Route::get('/add', 'RegisterController@UserAddForm')->name('UserAddForm');
            Route::post('/add','RegisterController@UserCreat')->name('UserCreat');
            Route::post('/change/user/status', 'RegisterController@UserStatusChange')->name('UserStatusChange');
            Route::post('password/{id}reset','RegisterController@DefaultPassword')->name('DefaultPassword');
            Route::get('edit/{id}','RegisterController@UserEdit')->name('UserEdit');
        });
        Route::group(['prefix'=>'meeting'], function(){
            Route::get('/', 'MeetingController@Index')->name('MeetingList');
            Route::get('/add', 'MeetingController@CreateMeetingForm')->name('CreateMeetingForm');
            Route::post('/add', 'MeetingController@CreateMeeting')->name('CreateMeeting');
            Route::get('/{Token}/edit','CompanyController@EditCompanyInfo')->name('EditCompanyInfo');
            Route::post('UpdateCompanyInfo', 'CompanyController@UpdateCompanyInfo')->name('UpdateCompanyInfo');

//            Route::post('/change/user/status', 'MeetingController@UserStatusChange')->name('UserStatusChange');
//            Route::post('password/{id}reset','MeetingController@DefaultPassword')->name('DefaultPassword');
//            Route::get('edit/{id}','MeetingController@UserEdit')->name('UserEdit');
        });
        Route::group(['prefix'=>'office/order'], function(){
            Route::get('/','OfficeOrderController@OfficeOrderList')->name('OfficeOrderList');
            Route::get('/add','OfficeOrderController@AddStationNews')->name('AddStationNews');
            Route::post('/OfficeOrder','OfficeOrderController@OfficeOrder')->name('OfficeOrder');
            Route::post('/change/stationnews/status', 'OfficeOrderController@StationNewsStatusChange')->name('StationNewsStatusChange');
        });
        Route::group(['prefix'=>'organization_news'], function(){
            Route::get('/','OrganizationNewsController@OrganizationNewsList')->name('OrganizationNewsList');
            Route::get('/add','OrganizationNewsController@AddOrganizationNews')->name('AddOrganizationNews');
            Route::post('/OrganizationNews','OrganizationNewsController@OrganizationNews')->name('OrganizationNews');
//            Route::post('/change/stationnews/status', 'OrganizationNewsController@StationNewsStatusChange')->name('StationNewsStatusChange');
        });
        Route::group(['prefix'=>'holiday'], function(){
            Route::get('/','HolidayController@HolidayList')->name('HolidayList');
            Route::get('/add','HolidayController@AddHoliday')->name('AddHoliday');
            Route::post('/add','HolidayController@SaveHoliday')->name('SaveHoliday');
            Route::get('/{Token}/edit','HolidayController@EditHoliday')->name('EditHoliday');
            Route::post('/{Token}/edit','HolidayController@UpdateHoliday')->name('UpdateHoliday');
        });
        Route::group(['prefix'=>'job'], function(){
            Route::get('/','JobController@JobList')->name('JobList');
            Route::get('/request/list','JobController@JobRequestList')->name('JobRequestList');
            Route::get('/add','JobController@RequestJobForm')->name('RequestJobForm');
            Route::post('/add','JobController@RequestJob')->name('RequestJob');
            Route::get('/{Token}/edit','JobController@EditJobPostForm')->name('EditJobPostForm');
            Route::post('/{Token}/edit','JobController@JobRequestEdit')->name('JobRequestEdit');
            Route::post('/JobRequestChangeStatus','JobController@JobRequestChangeStatus')->name('JobRequestChangeStatus');
        });
        Route::group(['prefix'=>'candidate'], function(){
            Route::get('/','CandidateController@CandidateList')->name('CandidateList');
            Route::get('{Token}/add','CandidateController@AddCandidatePost')->name('AddCandidatePost');
            Route::post('/SaveCandidatePost','CandidateController@SaveCandidatePost')->name('SaveCandidatePost');
            Route::get('/{Token}/details','CandidateController@CandidateDetails')->name('CandidateDetails');
//            Route::post('/{Token}/edit','CandidateController@UpdateCandidatePost')->name('UpdateCandidatePost');

        });
        Route::group(['prefix'=>'announcement'], function(){
            Route::get('/','AnnouncementController@AnnouncementList')->name('AnnouncementList');
            Route::get('/add','AnnouncementController@AddAnnouncement')->name('AddAnnouncement');
            Route::post('/store','AnnouncementController@AnnouncementStore')->name('AnnouncementStore');
            Route::post('/change/announcement/status', 'AnnouncementController@AnnouncementStatusChange')->name('AnnouncementStatusChange');
        });


        Route::group(['prefix'=>'employee'], function(){

            Route::get('/','EmployeeController@EmployeeList')->name('EmployeeList');
            Route::get('/add','EmployeeController@EmployeeCreateForm')->name('EmployeeCreateForm');
            Route::post('/add','EmployeeController@EmployeeSave')->name('EmployeeSave');
            Route::get('/{token}/edit/', 'EmployeeController@EditEmployeeInfo')->name('EditEmployeeInfo');
            Route::post('UpdateEmployee', 'EmployeeController@UpdateEmployee')->name('UpdateEmployee');

            Route::group(['prefix'=>'qualification'], function(){
                Route::get('/','EmployeeQualificationsController@EmployeeQualificationsList')->name('EmployeeQualificationsList');
                Route::get('/add/{token}','EmployeeQualificationsController@EmployeeQualificationsCreateForm')->name('EmployeeQualificationsCreateForm');
                Route::post('/add','EmployeeQualificationsController@EmployeeQualificationsSave')->name('EmployeeQualificationsSave');
                Route::get('/{token}/edit/', 'EmployeeQualificationsController@EditEmployeeQualificationInfo')->name('EditEmployeeQualificationInfo');
                Route::post('UpdateEmployeeQualification', 'EmployeeQualificationsController@UpdateEmployeeQualification')->name('UpdateEmployeeQualification');
            });
            Route::group(['prefix'=>'work'], function(){
                Route::get('/','EmployeeWorkExperiencesController@EmployeeWorkExperiencesList')->name('EmployeeWorkExperiencesList');
                Route::get('/add/{Token}','EmployeeWorkExperiencesController@EmployeeWorkExperiencesCreateForm')->name('EmployeeWorkExperiencesCreateForm');
                Route::post('/add','EmployeeWorkExperiencesController@EmployeeWorkExperiencesSave')->name('EmployeeWorkExperiencesSave');
                Route::get('/{token}/edit/', 'EmployeeWorkExperiencesController@EditEmployeeWorkInfo')->name('EditEmployeeWorkInfo');
                Route::post('UpdateEmployee', 'EmployeeWorkExperiencesController@UpdateEmployeeWork')->name('UpdateEmployeeWork');
            });
            Route::group(['prefix'=>'contract'], function(){
                Route::get('/','EmployeeContractController@EmployeeContractList')->name('EmployeeContractList');
                Route::get('/add/{token}','EmployeeContractController@EmployeeContractCreateForm')->name('EmployeeContractCreateForm');
                Route::post('/add','EmployeeContractController@EmployeeContractSave')->name('EmployeeContractSave');
                Route::get('/{token}/edit/', 'EmployeeContractController@EditEmployeeContractInfo')->name('EditEmployeeContractInfo');
                Route::post('UpdateEmployeeContract', 'EmployeeContractController@UpdateEmployeeContract')->name('UpdateEmployeeContract');
            });
            Route::group(['prefix'=>'socials'], function() {
                Route::get('/','EmployeeSocialController@SocialIndex')->name('SocialIndex');
                Route::get('/add/{Token}','EmployeeSocialController@SocialForm')->name('SocialForm');
                Route::post('/add','EmployeeSocialController@SocialFormSave')->name('SocialFormSave');
            });
            Route::group(['prefix'=>'ssb'], function() {
                Route::get('/','EmployeeSsbController@SsbIndex')->name('SsbIndex');
                Route::get('/add/{token}','EmployeeSsbController@SsbForm')->name('SsbForm');
                Route::post('/add','EmployeeSsbController@SsbFormSave')->name('SsbFormSave');
                Route::get('/{token}/edit/', 'EmployeeSsbController@EditSsbInfo')->name('EditSsbInfo');

            });
            Route::group(['prefix'=>'training'], function(){
                Route::get('/','EmployeeTrainingController@TrainingList')->name('TrainingList');
                Route::get('/add/{token}','EmployeeTrainingController@TrainingCreateForm')->name('TrainingCreateForm');
                Route::post('/add','EmployeeTrainingController@TrainingSave')->name('TrainingSave');
                Route::get('/{token}/edit/', 'EmployeeTrainingController@EditTrainingInfo')->name('EditTrainingInfo');
                Route::post('UpdateTraining', 'EmployeeTrainingController@UpdateTraining')->name('UpdateTraining');
            });
            Route::group(['prefix'=>'languages'], function(){
                Route::get('/','EmployeeLanguageController@LanguageList')->name('LanguageList');
                Route::get('/add/{token}','EmployeeLanguageController@LanguageCreateForm')->name('LanguageCreateForm');
                Route::post('/add','EmployeeLanguageController@LanguageSave')->name('LanguageSave');
                Route::get('/{token}/edit/', 'EmployeeLanguageController@EditLanguageInfo')->name('EditLanguageInfo');
                Route::post('UpdateLanguage', 'EmployeeLanguageController@UpdateLanguage')->name('UpdateLanguage');
            });
            Route::group(['prefix'=>'bank_account'], function(){
                Route::get('/','EmployeeBankAccountsController@BankAccountList')->name('BankAccountList');
                Route::get('/add/{token}','EmployeeBankAccountsController@BankAccountCreateForm')->name('BankAccountCreateForm');
                Route::post('/add','EmployeeBankAccountsController@BankAccountSave')->name('BankAccountSave');
                Route::get('/{token}/edit/', 'EmployeeBankAccountsController@EditBankAccountInfo')->name('EditBankAccountInfo');
                Route::post('UpdateBankAccount', 'EmployeeBankAccountsController@UpdateBankAccount')->name('UpdateBankAccount');
            });


        });



});



