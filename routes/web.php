<?php

use App\Http\Controllers\AddLeadDirectly;
use App\Http\Controllers\AppointmentModelController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CasteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\CheckInController;
use App\Http\Controllers\ComplainController;
use App\Http\Controllers\CrmController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\FormDataController;
use App\Http\Controllers\KundliController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\MigrationController;
use App\Http\Controllers\NodeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PsDashboardController;
use App\Http\Controllers\RazorPayController;
use App\Http\Controllers\ReligionController;
use App\Http\Controllers\RequestLeadsController;
use App\Http\Controllers\TeamLeaderController;
use App\Http\Controllers\TempleTransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDataController;
use App\Http\Controllers\UserPhotoController;
use App\Http\Controllers\UserPreferenceController;
use App\Http\Controllers\WebsitePlanController;
use Illuminate\Support\Facades\Artisan;
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

/*
This link will redirect you to the main page. On the main page, you will find a variety of options to choose from, including links to related pages, recent updates, and featured content. Additionally, you can use the search bar to find specific information or navigate through the site using the menu bar at the top of the page. It is important to note that the main page is a hub for all of the content on the website, so taking the time to explore it thoroughly can be very useful in finding what you are looking for.
*/

Route::get('/', function () {
        return view('welcome');
})->name('welcome');

/*
Middleware is an essential component of any system that requires secure data management. It is used to prevent unauthorized access to sensitive data by acting as a barrier between the data and any outside request. By using middleware, access to data can be regulated and monitored, ensuring that only authorized users can access the data they need. In addition to its security benefits, middleware can also help to improve the efficiency of a system by providing a layer of abstraction between the application and the underlying operating system. This can help to simplify the development process and make it easier to maintain and update the system over time.
*/
Route::group(['middleware' => ['auth']], function () {

        /*
    After successfully logging in, you will be automatically directed to the dashboard. The dashboard is where you can access a variety of tools and resources to manage your account and make the most of our services. From the dashboard, you can view your account balance, review your transaction history, and manage your payment methods. You can also access our customer support team, who are available to assist you with any questions or concerns you may have. In addition, the dashboard provides important notifications and alerts regarding your account, so you can stay up-to-date on any changes or updates to our services.
    */
        Route::get('user-dashboard', [DashboardController::class, 'userDashboard'])->name('userdashboard');

        /*
      Admin protected routes defined below
      To access these routes, users are required to have appropriate permissions and credentials. The purpose of these protected routes is to ensure the security and integrity of the system, preventing unauthorized access and malicious actions. By restricting access to only authorized personnel, the system is better able to maintain confidentiality, availability, and reliability. In addition, the administrator-protected routes allow for more granular control and delegation of responsibilities, improving the overall efficiency and effectiveness of the system
     */
        Route::prefix('admin')->group(function () {
                # department routes group
                /*
            There are different methods to manage master data. One of these methods involves using master data routes, which help organizations keep track of the different types of master data they have. These routes can be customized to fit the organization's specific needs and can be used to manage everything from customer data to product data. By incorporating master data routes into their data management strategy, organizations can improve data accuracy, reduce data duplication, and increase efficiency.


        */
                /*
            A key responsibility for any manager is to manage their department. This means overseeing the day-to-day operations, ensuring that all employees are working efficiently and effectively, and addressing any issues that arise. In order to be a successful manager, it is also important to have a clear understanding of the master route. This refers to the overall strategy and direction of the company, and how the department fits into and supports that strategy. By aligning the department's goals and activities with the master route, a manager can help ensure that the department is contributing to the company's success in a meaningful way. Therefore, managing the department and understanding the master route are both critical components of effective management.
        */
                Route::get('department-master', [DepartmentController::class, 'index'])->name('departmentmaster');
                /*
            In order to ensure the smooth functioning of the department, it is important to maintain accurate and up-to-date master data. This includes information on the department's personnel, equipment, inventory, and other resources. Additionally, it is important to regularly review and update this data to ensure that it remains relevant and useful. By doing so, the department can make informed decisions and effectively allocate resources to meet its goals and objectives. Furthermore, having comprehensive master data can also help the department identify areas for improvement, streamline processes, and enhance overall efficiency and productivity.
        */
                Route::post('save-department-master', [DepartmentController::class, 'store'])->name('savedepartmentmaster');
                /*
            To obtain a comprehensive list of all departments, you may want to consult various resources. For instance, you will find information about all the departments, their functions, and the people in charge. Additionally, you can reach out to the HR department and ask for a list of all the departments along with their contact information.
        */
                Route::get('get-all-departments', [DepartmentController::class, 'getallDepartment'])->name('getalldepartments');
                /*
            It appears that the user wants to delete a department from a list. In order to do so, they may need to provide more information, such as the name of the list and the specific department they want to remove. It is important to ensure that the department being removed is no longer needed and that any necessary changes to related systems or processes are made. Additionally, it may be helpful to consider the impact of this change on other areas of the organization, such as staffing or workflow. Overall, careful consideration and planning are key to successfully deleting a department from a list.
        */
                Route::get('delete-department', [DepartmentController::class, 'deleteDepartment'])->name('deletedepartment');
                /*
            To obtain a comprehensive list of all departments, you may want to consult various resources. For instance, you will find information about all the departments, their functions, and the people in charge. Additionally, you can reach out to the HR department and ask for a list of all the departments along with their contact information.
        */
                Route::get('department-json', [DepartmentController::class, 'getDepartmentJson'])->name('departmentjson');
                #designation
                /* In order to view the designation master page, you will need to follow a few simple steps. Firstly, ensure that you are logged in to your account. Once you have done so, navigate to the main menu and select "Designations". From here, you will be able to access the designation master page which contains all of the information and tools you need to manage your designations. Remember to take your time and explore all of the different features available to you in order to make the most of this powerful tool. */
                Route::get('designation-master', [DesignationController::class, 'index'])->name('designationmaster');
                /* To complete the task of saving a new record into a department, there are several steps that must be taken. First, it is necessary to identify the department where the new record will be saved. This can involve researching the department's structure and determining the appropriate location for the record within that structure.

Once the department has been identified, the next step is to determine the format in which the new record should be saved. This can involve selecting the appropriate database or file format and ensuring that the record is properly formatted and labeled.

Another important consideration when saving a new record into a department is security. It is essential to ensure that the record is protected from unauthorized access and that only authorized individuals have the necessary permissions to view or modify the record.

Finally, it is important to establish a system for maintaining and updating the record over time. This can involve setting up regular backups and implementing procedures for reviewing and updating the record as needed to ensure that it remains accurate and up-to-date. */
                Route::post('save-designation-master', [DesignationController::class, 'store'])->name('savedesignationmaster');
                /* To ensure that you have a comprehensive overview of your designations, it is important to obtain a list of all saved and active designations. This will allow you to better understand the current status of each designation, including any ongoing tasks or requirements that need to be fulfilled. Additionally, having access to this information can help you identify any potential issues or areas for improvement, such as designations that may be nearing expiration or ones that have not been updated in some time. By taking proactive steps to manage and maintain your designations, you can ensure that they remain up-to-date and relevant, which can ultimately help you achieve your goals more effectively. */
                Route::get('get-all-designations', [DesignationController::class, 'getallDesignation'])->name('getalldesignations');
                /* In order to remove a designation from a list, you can either mark it as inactive or delete it entirely. When you mark a designation as inactive, it will still be visible in the list but will not be available for selection. On the other hand, when you delete a designation, it will be permanently removed from the list and cannot be recovered. It is important to consider which option is best for your needs before making a final decision. */
                Route::get('delete-designation', [DesignationController::class, 'deleteDesignation'])->name('deletedesignation');
                /* Our goal is to make sure users are seamlessly redirected to the dashboard page view. This is important because the dashboard is the central hub for all the information that users need. By providing them with quick access to their account information, recent activity, and other important updates, we ensure that they have the best experience possible on our platform. We are constantly working to improve the dashboard and make it more user-friendly, so that users can easily find what they need and complete their tasks with ease. We understand that navigating a complex platform can be challenging, but our team is committed to providing the support and resources necessary to help users succeed. In short, redirecting users to the dashboard page view is just one of the many ways we strive to provide an exceptional user experience. */
                Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
                /* To ensure the proper functioning of our website, it is important to save the new Facebook add token to the database. This token is a unique identifier that allows Facebook to recognize our website and serve targeted ads to our users. By storing this token in our database, we can ensure that our users are seeing the most relevant advertisements, while also helping us to optimize our ad campaigns. Additionally, this information can be used to track the effectiveness of our ads and make data-driven decisions about future advertising efforts. Therefore, it is imperative that we save the new Facebook add token to the database page view, as it is an essential component of our overall marketing strategy. */
                Route::get('fb-toekn-add', [ChannelController::class, 'index'])->name('addfbtoken');
                /*In order to manage the religion of a particular caste, there are a number of actions that can be taken. One option is to save any changes that have been made, ensuring that they will be preserved for future reference. Another option is to update the information associated with a particular caste, which can be useful if there are new developments that need to be recorded. Additionally, it may be necessary to delete a caste altogether if it is no longer relevant or if it has been merged with another group. Finally, updating the page view of a particular caste can help to ensure that it is more easily found by others who are searching for information on that topic. */
                Route::get('manage-caste', [CasteController::class, 'index'])->name('managecaste');
                /* To get a list of the existing castes for the page view, we can undertake a few different steps. Firstly, we can gather information on the current castes within the system, and then we can analyze and organize this data into an easily accessible format. Additionally, we can look at any potential updates or changes to the caste system, and determine how these changes may affect the existing castes. Finally, we can consider the various use cases for this list of castes, and ensure that the information is presented in a clear and concise manner to meet the needs of the intended audience. */
                Route::get('show-caste-list', [CasteController::class, 'show'])->name('showcastelist');
                /*To ensure that the new caste name is properly documented and recorded, we must first determine where it belongs in the caste list. Once identified, we can add it to the appropriate location in the list or database. It's important to keep the caste list up-to-date and accurate, as it serves as a vital resource for various purposes, such as research, historical analysis, and social development. By adding the new caste name to the list, we contribute to the preservation and growth of our understanding of social structures and hierarchies. */
                Route::post('save-caste-name', [CasteController::class, 'store'])->name('savecaste');
                /*To ensure that the caste list or database is up-to-date, it is important to regularly update it with any changes to caste names or affiliations. This will ensure that all members of the community are properly represented and that the database accurately reflects the diversity of the population. Additionally, it may be helpful to include more detailed information about each caste, such as their historical significance or current social and economic status. This can provide a more nuanced understanding of the caste system and its impact on society. Overall, regularly updating and expanding the caste list or database can play an important role in promoting social justice and equality for all members of the community. */
                Route::post('update-caste-details', [CasteController::class, 'update'])->name('updatecaste');
                /* One important aspect to consider when dealing with failed transactions on Paytm and Razorpay is to track and analyze the page views associated with these events. By doing so, you can identify potential issues with the user interface or the payment gateway that may be causing transactions to fail. It is also important to communicate clearly with the user regarding the reason for the failure and provide possible solutions or next steps to resolve the issue. For example, you may suggest that the user check their bank account balance or contact their bank to ensure that there are no issues on their end. Additionally, it may be helpful to provide alternative payment options to the user in case the issue cannot be resolved with the current payment method. By taking these steps, you can not only increase the chances of a successful transaction but also improve the user experience overall.*/
                Route::get('get-failed-transaction', [UserController::class, 'getFailedTransaction'])->name('getfailedtxn');
                /* In order to access records of failed transactions by their respective teams, a user must first be defined. This user will have the necessary permissions to view and analyze data related to failed transactions. Additionally, the user will be able to access this data in a team-wise manner, meaning that they can analyze the performance of each team with regards to failed transactions. The team leaders will also have access to this information, allowing them to identify areas of weakness and to take corrective measures to ensure that the team is performing at its best. By having a designated user and team-wise access to failed transaction data, the organization can ensure that its teams are operating efficiently and effectively. */
                Route::post('save-txn-access-data', [UserController::class, 'getTransactionList'])->name('saveacceslogs');
                /* The company aims to manage a website plan that is highly visible to clients. This website will offer various plans that clients can choose from, depending on their specific needs and the expected page views they anticipate. The website plan will be designed to ensure that clients can easily navigate through it, and will provide detailed information about each plan and its corresponding features. Additionally, the website plan will incorporate various payment options to ensure that clients can choose the most convenient method for them. The company is committed to providing clients with a robust and reliable website plan that meets their specific needs and exceeds their expectations.*/
                Route::get('manage-website-plans', [WebsitePlanController::class, 'showPage'])->name('mangewebplans');
                /* Upon visiting the page, you will be able to view a list of all the users who have logged into our database. This feature is particularly useful for administrators who need to keep track of user activity and ensure the security of our system. The user logging page also provides detailed information about each user, including their login history, IP address, and login times. In addition, the page allows you to sort users by various criteria, such as login date, location, and device type, making it easy to identify patterns and potential security threats. By regularly monitoring user activity through this page, we can ensure the integrity and safety of our system, as well as provide valuable insights into user behavior and usage patterns.*/
                Route::get('user-login-details', [UserController::class, 'userLoginDetails'])->name('userlogindetails');
                /* To ensure that clients are able to choose the best plan according to their needs and page views, it is important to develop an effective website plan that is visible and easily navigable. This can be achieved by creating a clear and concise layout that outlines the various available options and features of each plan. Additionally, the website should be designed in such a way that clients can easily compare and contrast the different plans and make an informed decision. By providing this level of detail and clarity, clients are more likely to trust the website and choose a plan that best suits their needs. Moreover, the website should be regularly updated to ensure that the information remains relevant and up-to-date. This will not only enhance the user experience but also help to establish the website as a reliable source of information and services. */
                Route::get('get-website-plans', [WebsitePlanController::class, 'show'])->name('getwebplans');

                /* To ensure that clients are able to choose the best plan according to their needs and page views, it is important to develop an effective website plan that is visible and easily navigable. This can be achieved by creating a clear and concise layout that outlines the various available options and features of each plan. Additionally, the website should be designed in such a way that clients can easily compare and contrast the different plans and make an informed decision. By providing this level of detail and clarity, clients are more likely to trust the website and choose a plan that best suits their needs. Moreover, the website should be regularly updated to ensure that the information remains relevant and up-to-date. This will not only enhance the user experience but also help to establish the website as a reliable source of information and services. */

                Route::get('get-web-plan-category', [WebsitePlanController::class, 'showCategory'])->name('getwebplancats');
                /*
 To create a comprehensive plan for managing a website, it is important to consider various aspects that may affect its success. One of the first steps is to determine the categories that the website will cover. This can be done by analyzing the target audience and identifying their needs and interests. Next, it is important to develop a content strategy that aligns with the categories identified. This can include creating a content calendar, conducting keyword research for SEO optimization, and determining the tone and voice of the website. Additionally, a social media strategy can be developed to support the website's goals and drive traffic to the site. It is also important to consider the technical aspects of website management, such as choosing a suitable hosting service, ensuring website security, and monitoring website analytics to track performance and identify areas for improvement. By taking a holistic approach to website management, it is possible to create a successful and engaging online presence that meets the needs of both the website owner and the target audience
 */
                Route::post('category-manage', [WebsitePlanController::class, 'manageCategory'])->name('category_manage');
                /*
To create a comprehensive plan for managing a website, it is important to consider various aspects that may affect its success. One of the first steps is to determine the categories that the website will cover. This can be done by analyzing the target audience and identifying their needs and interests. Next, it is important to develop a content strategy that aligns with the categories identified. This can include creating a content calendar, conducting keyword research for SEO optimization, and determining the tone and voice of the website. Additionally, a social media strategy can be developed to support the website's goals and drive traffic to the site. It is also important to consider the technical aspects of website management, such as choosing a suitable hosting service, ensuring website security, and monitoring website analytics to track performance and identify areas for improvement. By taking a holistic approach to website management, it is possible to create a successful and engaging online presence that meets the needs of both the website owner and the target audience
*/
                Route::post('post-website-plans', [WebsitePlanController::class, 'postwebsitePllanData'])->name('postwebplan');
                /*
To obtain a website plan using their IDs, first, you will need to access the website's database. Once inside, you can search for the specific IDs and retrieve their corresponding plans. It is important to ensure that the IDs are accurate and up-to-date in order to obtain the correct plan. Additionally, it may be useful to include information about the purpose and benefits of obtaining a website plan, such as ensuring efficient website management and facilitating communication between team members. Finally, it is important to consider the potential challenges that may arise during the process, such as data privacy concerns or technical difficulties, and plan accordingly to mitigate these risks.
*/
                Route::get('get-web-plan-by-id', [WebsitePlanController::class, 'getPlantByCategory'])->name('getplanbyids');
                Route::get('show-logged-in-user-list', [UserController::class, 'showUserLogin'])->name('getuserlogindetails');
                Route::get('update-logout-time', [UserController::class, 'updateLogoutTime'])->name('updatelogouttime');
        });

        /*The telesales dashboard is a centralized location where sales representatives can manage their leads and follow up with potential clients. With access to all the necessary information in one place, sales representatives can easily prioritize leads and focus on those that are most likely to convert into customers. In addition, the dashboard provides valuable insights into the performance of the sales team, allowing managers to identify areas for improvement and make data-driven decisions. Overall, the telesales dashboard is an essential tool for any company looking to streamline their sales process and improve their bottom line.*/
        Route::prefix('crm')->group(function () {
                /*The telesales dashboard is a centralized location where sales representatives can manage their leads and follow up with potential clients. With access to all the necessary information in one place, sales representatives can easily prioritize leads and focus on those that are most likely to convert into customers. In addition, the dashboard provides valuable insights into the performance of the sales team, allowing managers to identify areas for improvement and make data-driven decisions. Overall, the telesales dashboard is an essential tool for any company looking to streamline their sales process and improve their bottom line. */
                Route::get('leads', [LeadController::class, 'index'])->name('crmleads');
                /*We have been fortunate to have a growing number of clients who have viewed our subscription pages. These clients come from a diverse range of backgrounds and industries, including but not limited to finance, healthcare, technology, and education. They appreciate the variety of subscription options we offer, which cater to different needs and budgets. Some of our clients have even shared positive feedback about their experiences with our subscriptions, which has helped us refine our offerings to better meet their needs. We are always looking for ways to improve our services and attract new clients, and the interest we have received from our current client base is a testament to the quality of our subscriptions. */
                Route::get('search-leads', [LeadController::class, 'searchLeadDetails'])->name('searchleads');
                /*The telesales dashboard is a centralized location where sales representatives can manage their leads and follow up with potential clients. With access to all the necessary information in one place, sales representatives can easily prioritize leads and focus on those that are most likely to convert into customers. In addition, the dashboard provides valuable insights into the performance of the sales team, allowing managers to identify areas for improvement and make data-driven decisions. Overall, the telesales dashboard is an essential tool for any company looking to streamline their sales process and improve their bottom line. */
                Route::get('all-leads', [LeadController::class, 'showLeadData'])->name('allleads');
                /*We have been fortunate to have a growing number of clients who have viewed our subscription pages. These clients come from a diverse range of backgrounds and industries, including but not limited to finance, healthcare, technology, and education. They appreciate the variety of subscription options we offer, which cater to different needs and budgets. Some of our clients have even shared positive feedback about their experiences with our subscriptions, which has helped us refine our offerings to better meet their needs. We are always looking for ways to improve our services and attract new clients, and the interest we have received from our current client base is a testament to the quality of our subscriptions. */
                Route::get('subscription-seen', [LeadController::class, 'subSeenView'])->name('subscriptionseen');
                /*We have been fortunate to have a growing number of clients who have viewed our subscription pages. These clients come from a diverse range of backgrounds and industries, including but not limited to finance, healthcare, technology, and education. They appreciate the variety of subscription options we offer, which cater to different needs and budgets. Some of our clients have even shared positive feedback about their experiences with our subscriptions, which has helped us refine our offerings to better meet their needs. We are always looking for ways to improve our services and attract new clients, and the interest we have received from our current client base is a testament to the quality of our subscriptions. */
                Route::get('subscription-seen-list', [LeadController::class, 'showSubscriptionSeenData'])->name('allsubscriptionseenlist');
                /*Our records show that there is a considerable list of clients who have attempted to reach us but were unable to get through to our operators. It is important that we address this issue as soon as possible in order to ensure that we are providing top-quality service to our clients. We will analyze the reasons behind the missed calls and develop a plan to improve our response time and minimize the number of missed calls. Additionally, we will consider implementing a new system that will allow clients to schedule appointments and receive a call back during a specified time window. This will help us to better manage our call volume and ensure that our clients' needs are being met. */
                Route::get('all-operator-calls', [LeadController::class, 'showOperatorCallsView'])->name('alloperatorcalls');
                /*
To obtain a website plan using their IDs, first, you will need to access the website's database. Once inside, you can search for the specific IDs and retrieve their corresponding plans. It is important to ensure that the IDs are accurate and up-to-date in order to obtain the correct plan. Additionally, it may be useful to include information about the purpose and benefits of obtaining a website plan, such as ensuring efficient website management and facilitating communication between team members. Finally, it is important to consider the potential challenges that may arise during the process, such as data privacy concerns or technical difficulties, and plan accordingly to mitigate these risks.
*/
                Route::get('get-crm-plans', [LeadController::class, 'leadPlans'])->name('crmleadplans');
                /*
After a thorough analysis of our sales data, it is evident that we need to improve our lead follow-up process. Studies have shown that a lead that is followed up quickly is more likely to convert into a sale. Therefore, we need to allocate more resources to this area by hiring additional staff and providing them with the necessary training. Additionally, we should implement an automated lead nurturing system to ensure that every lead receives timely and relevant communication from our sales team. This will not only increase our conversion rates, but also improve the overall customer experience.
*/
                Route::post('save-followups', [LeadController::class, 'saveLeadCrmFollowup'])->name('savefollowups');
                /*
One important task to accomplish is to add new leads to the CRM system. This helps in managing customer data and keeping track of potential sales opportunities. When adding a new lead, it is important to input accurate and complete information such as their name, contact details, and any other relevant information. Additionally, you may want to consider assigning a follow-up action or task to a member of your team to ensure that the lead is contacted and engaged in a timely manner. It is also good practice to regularly review the leads in the CRM system and update their status as needed. This can help in identifying potential areas for improvement in your sales process and ultimately lead to increased conversions.
*/
                Route::post('add-lead-telesales', [LeadController::class, 'addLeadTeleSales'])->name('addleadtelesales');
                /*
After a thorough analysis of our sales data, it is evident that we need to improve our lead follow-up process. Studies have shown that a lead that is followed up quickly is more likely to convert into a sale. Therefore, we need to allocate more resources to this area by hiring additional staff and providing them with the necessary training. Additionally, we should implement an automated lead nurturing system to ensure that every lead receives timely and relevant communication from our sales team. This will not only increase our conversion rates, but also improve the overall customer experience.
*/
                Route::post('add-leads-followp', [LeadController::class, 'saveLeadFollowup'])->name('addleadsfollowp');
                /*
After a thorough analysis of our sales data, it is evident that we need to improve our lead follow-up process. Studies have shown that a lead that is followed up quickly is more likely to convert into a sale. Therefore, we need to allocate more resources to this area by hiring additional staff and providing them with the necessary training. Additionally, we should implement an automated lead nurturing system to ensure that every lead receives timely and relevant communication from our sales team. This will not only increase our conversion rates, but also improve the overall customer experience.
*/
                Route::get('add-leads-followp', [LeadController::class, 'saveLeadFollowup'])->name('addleadsfollowpget');
                /*
To successfully manage your client relationships, it is important to stay in touch with them regularly. One way to do this is to make appointments with them to discuss their needs and how your company can help them achieve their goals. These appointments can be conducted in person, over the phone, or virtually. Additionally, it may be helpful to send follow-up emails or notes summarizing the key points discussed during the appointment, as well as any action items that were identified. By prioritizing regular communication and follow-up, you can build stronger relationships with your clients and increase the likelihood of their continued satisfaction with your services.
*/
                Route::post('make-an-appointment', [AppointmentModelController::class, 'createAppointment'])->name('makeanappointment');
                /*
To obtain leads from Facebook for your customer relationship management (CRM) system, there are several steps you can take. Firstly, it is important to ensure that your Facebook page is complete and up-to-date with accurate information about your business or organization. Next, you can consider creating targeted ads on Facebook to reach potential customers who are interested in your products or services. Another option is to join and engage with relevant Facebook groups related to your industry or niche. Additionally, you can use Facebook's built-in lead generation forms to collect information from potential customers who are interested in learning more about your business. Finally, it is important to follow up with leads in a timely manner and to track your results to continually improve your lead generation efforts. By following these steps, you can effectively use Facebook to generate leads for your CRM system and ultimately grow your business.
*/
                Route::get('get-facebook-leads', [LeadController::class, 'getFacebookLeads'])->name('getfacebookleads');
                /*
To obtain the most up-to-date information on potential customers, it is necessary to retrieve the last requested leads from the customer relationship management system. This information will allow for a more comprehensive understanding of the market, including new trends, emerging needs, and potential opportunities. By analyzing this data, businesses can better tailor their sales and marketing strategies to fit the needs of their target audience, leading to increased revenue and customer acquisition. Additionally, this information can be used to identify areas of improvement, such as gaps in the product offering or ineffective messaging, and can inform future product development or marketing campaigns. Therefore, retrieving the last requested leads from the CRM is a crucial step in maintaining a competitive edge in the market.
*/
                Route::get('get-last-requested-leads', [LeadController::class, 'getLastRequestedLeads'])->name('getlatrequestedleads');
                /*
One issue that we've been encountering is that some of our leads are marked as not picked up, but they are actually incomplete. This has been causing a delay in our sales process and we need to find a solution. One potential solution could be to assign a team member to follow up with these incomplete leads and gather the missing information. Additionally, we could consider implementing a system to automatically flag leads as incomplete if they are missing certain key information. This would help ensure that all leads are properly reviewed and we can avoid any further delays in our sales process.
*/
                Route::get('not-pickup-incomplete-leads', [LeadController::class, 'notPickupIncompleteLeads'])->name('notpickupincompleteleads');
                /*
The user category related to Facebook query is a broad field with many different aspects to consider. One key factor is understanding the user's behavior on the platform, such as what types of content they engage with the most and how often they use the site. Additionally, it is important to analyze the user's demographic information, including age, gender, location, and interests.
To gain a deeper understanding of the user, it may also be helpful to examine their social network and connections on Facebook. This can provide insight into their relationships and affiliations, which can in turn inform marketing and advertising strategies. Finally, it is important to stay up-to-date with changes to the Facebook platform, as these can impact user behavior and preferences.
*/
                Route::get('user-category-relations', [LeadController::class, 'getTemplerelation'])->name('usercategoryrelations');
                /*
After the user requests leads, they should count the number of leads they have received. It is important to keep track of the number of leads in order to analyze the success of the lead generation campaign, and to make adjustments as necessary. One way to increase the number of leads is to optimize the user's website for search engines, as this can increase traffic to the site and result in more leads. Additionally, the user may consider running targeted advertising campaigns, such as social media ads or Google Ads, in order to reach a wider audience and generate more leads. By carefully analyzing the user's lead generation strategy and making adjustments as necessary, they can increase the number of leads they receive and improve their overall success rate.
*/
                Route::get('count-requested-leads', [LeadController::class, 'countRequestedLeads'])->name('countrequestedleads');
                /*
 Our company is currently seeking to generate more leads for our CRM system. One effective way of doing this is by requesting website leads. By collecting contact information from website visitors, we can then follow up with them and potentially convert them into customers. It is important to note that follow-up is crucial in the lead generation process, as a lack of follow-up can result in missed opportunities. Additionally, it may be worth considering implementing lead nurturing techniques, such as personalized email campaigns, in order to further engage with potential customers and increase the chances of conversion. Overall, by prioritizing lead generation and following up consistently, we can work towards growing our customer base and increasing revenue.
 */
                Route::get('get-website-leads', [LeadController::class, 'getWebsiteLeads'])->name('getwebsiteleads');

                Route::get('request-facebook-leads', [RequestLeadsController::class, 'index'])->name('requestleads');

                Route::get('request-website-leads', [RequestLeadsController::class, 'requestWebsiteLeads'])->name('requestwebsiteleads');

                Route::get('request-website-leads-data', [LeadController::class, 'requestWebsiteLeadData'])->name('requestwebsiteleadsdata');

                Route::get('request-exhaust-leads-data', [LeadController::class, 'getConvertedLeads'])->name('requestexhaustleadsdata');

                Route::get('not-pick-leads-data', [LeadController::class, 'leadsNotPickUp'])->name('notpickwebleads');


                Route::get('request-exhaust-leads', [RequestLeadsController::class, 'requestExhaust'])->name('requestexhaustleads');

                Route::get('request-operator-lcall-leads', [RequestLeadsController::class, 'requestOperatorCalls'])->name('requestoperatorcalls');
                /*
To create a website plan, it is important to first consider the website's category. By understanding the website's category, you can better tailor your plan to meet the specific needs and goals of that category. For example, a website for a small business will have different requirements than a website for a large corporation. Additionally, it is important to consider the target audience of the website and how the website can best serve them. This may include features such as easy navigation, clear calls-to-action, and relevant content. By taking these factors into consideration, you can create a comprehensive website plan that will effectively meet the needs of both the website and its users.
*/
                Route::get('get-crm-plans-by-category', [WebsitePlanController::class, 'getCRMPlans'])->name('getcrmplansbycategory');
                /*
One possible solution to increase sales is to assign a lead to the telesales team. This would involve identifying potential customers and passing their information to the telesales team to follow up on. The telesales team could then use various techniques to engage with the customer, such as providing more information about the product, answering any questions they may have, and highlighting the benefits of the product. This approach could help to build trust and rapport with the customer, increasing the likelihood of a successful sale. Additionally, it could be useful to provide ongoing support and follow-up after the sale to ensure customer satisfaction and loyalty.
*/
                Route::get('update-assign-to', [LeadController::class, 'assignToMe'])->name('updateassignto');
                /*
Upon review of the current leads for the sales funnel, it has been determined that some of the leads do not meet the criteria for potential customers. Therefore, it is necessary to reject these leads in order to focus resources on pursuing leads that have a higher likelihood of conversion. In order to ensure that the leads being pursued meet the necessary qualifications, a thorough analysis of the target market will be conducted, and the sales team will receive additional training on how to identify and target high-quality leads. This process will ultimately lead to a more efficient and effective sales strategy, resulting in increased revenue and growth for the company.
*/
                Route::get('reject-lead', [LeadController::class, 'rejectLead'])->name('rejectlead');
                /*
In order to increase sales and revenue, we have previously requested leads from our customer relationship management (CRM) system. By obtaining these leads, we were able to expand our customer base and increase our chances of making sales. Moreover, the use of leads allows us to better understand our customers' needs and preferences, which in turn helps us tailor our marketing and sales strategies to better meet their needs. As such, the use of leads is crucial to the success of our business and we will continue to request them from our CRM system in the future.
*/
                Route::get('requested-leads', [LeadController::class, 'requestedLeads'])->name('requestedleads');
                Route::get('all-requested-fb-leads', [LeadController::class, 'allRequestedFbLeads'])->name('allrequestedfbleads');
                Route::get('all-requested-web-leads', [LeadController::class, 'allRequestedWebLeads'])->name('allrequestedwebleads');
                Route::get('all-requested-exhaust-leads', [LeadController::class, 'allRequestedExhaustLeads'])->name('allrequestedexhaustleads');
                /*
Today's follow-up is a crucial step in ensuring that all tasks and projects are being carried out smoothly and efficiently. By taking the time to review what has been accomplished and what still needs to be done, we can identify any potential roadblocks and come up with strategies to overcome them. Additionally, follow-up meetings provide an opportunity to discuss any new developments or concerns that may have arisen since the last meeting, allowing us to stay up-to-date and informed on all aspects of the project. It is important to take this step seriously and approach it with a proactive mindset, as it can greatly impact the success of our work.
*/
                Route::get('todays-followup', [LeadController::class, 'todaysFollowup'])->name('todaysfollowup');
                Route::get('todays-followup-data', [LeadController::class, 'todaysFollowupData'])->name('todaysfollowupdata');
                /*
Overall, my pending leads need to be reviewed and analyzed more carefully to identify potential opportunities for sales. It is important to take a closer look at each lead and gather more information in order to make informed decisions about which ones to pursue. It may also be beneficial to reach out to these leads with additional follow-up and personalized communication to build stronger relationships and increase the likelihood of closing a sale. Another important factor to consider is the current market conditions and trends, as well as the competitive landscape, to develop a strategic approach for converting these leads into actual sales. By taking a more thorough and strategic approach to managing these pending leads, we can maximize our potential for success and achieve our sales goals.
*/
                Route::get('my-pending-leads', [LeadController::class, 'myPendingLeads'])->name('pendingleads');
                Route::get('my-pending-leads-data', [LeadController::class, 'myPendingLeadsData'])->name('pendingleadsdata');
                /*
Telesales is a sales technique that involves contacting potential customers via telephone. The aim of telesales is to generate interest and ultimately secure sales. Overall appointments refer to the total number of scheduled meetings between a telesales agent and a potential customer. This is a crucial metric as it is directly linked to the success of a telesales campaign. Moreover, a higher number of overall appointments can lead to a greater conversion rate, as it provides more opportunities for the agent to effectively communicate the value proposition of the product or service being offered.
*/
                Route::get('my-appointments', [AppointmentModelController::class, 'myAppointments'])->name('myappoitments');
                Route::post('my-appointments-notes/{appointment}', [AppointmentModelController::class, 'myAppointmentNotes'])->name('addappointmentnotes');
                /*
To make a purchase, the client will need to be provided with a payment link that will allow them to complete the transaction easily and efficiently. It is important that the payment link is easy to use and understand, so that the client can complete the process without any complications. Once the link has been generated, it can be sent to the client via email or any other preferred communication method, along with any additional information that they may need to know about the purchase process. Providing clear and concise information to the client will help to ensure that the transaction runs smoothly and that the client is satisfied with their purchase.
*/
                Route::post("generate-payment-link", [CrmController::class, 'generatePaymentLink'])->name('genpaymentlink');
                /*
To obtain the lead details of a specific ID, you will first need to log into the system and navigate to the lead management section. Once there, you can search for the lead by entering the ID into the specified field. If the ID is valid, the system will display the relevant details, such as the lead's name, contact information, and any interactions they have had with your organization. It is important to ensure that the lead details are accurate and up-to-date, as this information will be crucial in determining the appropriate follow-up actions and next steps in the sales process.sa
*/
                Route::get('get-lead-details-by-id', [LeadController::class, 'getLeadDetailsById'])->name('getleadeatailsbyid');
                /*
One way to improve the teleasales process is to ensure that there is a backup number for each lead. This can be a number that is not commonly used, so that if the primary number is not working or the lead cannot be reached, the teleasales team has an alternate way to reach out to the lead. Additionally, it may be helpful to provide the team with additional information about the lead, such as their preferred method of communication or any specific interests they have expressed in the past. This can help the team tailor their approach and increase the chances of converting the lead into a customer.
*/
                Route::post('save-alternate-numbers', [LeadController::class, 'saveAlternateNumber'])->name('savealternatenumber');


                #renewal & upgradation
                Route::get('renewal-upgrade', [CrmController::class, 'index'])->name('renwaalnupgrade');
                Route::get('all-crm-leads', [CrmController::class, 'getAllCrmLeads'])->name('allcrmleads');
                Route::post('add-crm-leadsfollowp', [CrmController::class, 'updateFollowupCrm'])->name('addcrmleadsfollowp');
                Route::get('search-crm-leads', [CrmController::class, 'searchCrmLeads'])->name('searchcrmleads');
                Route::get('transfer-lead-to-me', [CrmController::class, 'assignLeadToSelf'])->name('transferleadtome');
                Route::post('add-crm-lead-telesales', [CrmController::class, 'addLeadCrm'])->name('addcrmleadtelesales');
                Route::get('add-receipts', [UserDataController::class, 'index'])->name('addreceipts');
                Route::post('save-receiving-amount', [PaymentController::class, 'makePaymentManual'])->name('saverecivingamount');
                /*
In order to ensure that all failed transactions are properly handled, it is important to have a system in place that allows for easy tracking and resolution. One possible solution is to create a list of all failed transactions and assign each one to a specific day for follow-up. This will help to ensure that each transaction is properly reviewed and addressed, and will also provide a clear record of all transactions that require attention. Additionally, it may be helpful to implement automated alerts or notifications to ensure that failed transactions are addressed in a timely manner, reducing the risk of further issues or complications.
*/
                Route::get('failed-transactions', [RazorPayController::class, 'index'])->name('failedtransactions');

                Route::get('paytm-view', [RazorPayController::class, 'paytmView'])->name('paytmview');
                Route::any('paytm-filter', [RazorPayController::class, 'paytmFilter'])->name('paytmfilterview');

                Route::get('rzorpay-view', [RazorPayController::class, 'razorpayView'])
                        ->name('razorpayview');
                Route::get('rzorpay-filter-view', [RazorPayController::class, 'razorpayFilterView'])->name('razorfilterview');
                Route::get('rzorpay-filter-view-details', [RazorPayController::class, 'viewPaymentDetailR'])->name('getrazoraydetails');
                Route::get('rzorpay-filter-view-details-modal', [RazorPayController::class, 'viewPaymentDetailP'])->name('viewpaytmdetails');

                Route::get('razorpay-transactions', [RazorPayController::class, 'showRzpTransactions'])->name('razorpaytransactions');
                Route::get('get-paytm-transactions', [RazorPayController::class, 'showPaytmTransactions'])->name('getpaytmtransactions');
                Route::get('get-paytm-failed-transactions', [RazorPayController::class, 'getPaytmFailedTxn'])->name('getpaytmfailedtransactions');

                # misc / uses for all routes
                Route::get('get-plan-details-by-id', [WebsitePlanController::class, 'getPlanDetailsById'])->name('getplandetailsbyid');
                Route::get('get-passbook-data', [TempleTransactionController::class, 'templeTransctions'])->name('getpassbookdata');
        });

        // checkin
        Route::prefix('user-checkin')->group(function () {
                Route::get("checkin", [CheckInController::class, 'index'])->name('checkin');
                Route::get("markin", [CheckInController::class, 'markCheckedIn'])->name('markcheckin');
                Route::get("markout", [CheckInController::class, 'markCheckedOut'])->name('markcheckout');
        });

        // Teamleader Routes
        Route::prefix('teamleader')->group(function () {
                /*
When working in telesales, transferring leads to other team members can be a great way to increase efficiency and improve sales. By dividing up the workload, each team member can focus on a specific set of leads, which can lead to better engagement and increased sales. Additionally, transferring leads can help ensure that each lead is being followed up on in a timely and consistent manner, leading to a more positive customer experience. However, it's important to make sure that the transfer process is streamlined and well-communicated to avoid any confusion or delays. Regular team meetings and clear guidelines for lead transfer can help ensure that the process runs smoothly and effectively. Overall, while transferring leads may require some extra effort upfront, the benefits in terms of increased productivity and sales can be well worth it in the long run.
*/
                Route::get('lead-transfer-view', [TeamLeaderController::class, 'index'])->name('transferleads');
                Route::get('accessable-team-leaders', [TeamLeaderController::class, 'getAccessableTemples'])->name('accessabletempleides');
                Route::get('count-temple-leads', [TeamLeaderController::class, 'getCountOfLeads'])->name('counttempleleads');
                Route::post('transfer-lead-to-other', [TeamLeaderController::class, 'transferLeads'])->name('savetransferleads');
        });

        // approval routes
        Route::prefix('approvals')->group(function () {
                /*
The process of approving profiles involves reviewing the information provided by users who have applied for approval. This includes verifying their identity, checking their qualifications and experience, and assessing their suitability for the platform. In cases where a user's profile is not approved, the reasons for the rejection are clearly communicated to the user. The user is then given the opportunity to provide additional information or make changes to their profile before resubmitting it for review. The goal is to ensure that only qualified and trustworthy users are approved to participate on the platform, which helps to maintain a high level of quality and safety for all users.
*/
                Route::get('approve-user-profile', [UserDataController::class, 'approveUserDataProfiles'])->name('approveprofile');
                Route::get('approve-user-pending-profile', [UserDataController::class, 'approveUserDataPendingProfiles'])->name('approvependingprofile');
                Route::get('approve-user-double-profile', [UserDataController::class, 'approveUserDataDoubleProfiles'])->name('approvedoubleprofile');
                /*
Once you have reviewed the user's uploaded photos and determined that they meet the necessary criteria, you can proceed to approve them. This involves carefully analyzing each photo, ensuring that it meets the requirements of the platform and the intended purpose of the photos. Additionally, it may be necessary to provide feedback or suggestions to the user in order to help them improve the quality of their photos in the future. By taking the time to thoroughly evaluate and approve user's photos, you can ensure that your platform maintains a high standard of content and user satisfaction.
*/
                Route::get('approve-user-photo-profile', [UserDataController::class, 'approveUserDataPhotoProfiles'])->name('approvephotoprofile');
                Route::get('getmessagecounts', [UserDataController::class, 'countMessages'])->name('getmessagecounts');
                Route::post('send-message-all', [UserDataController::class, 'sendWhatsAppMessageCommon'])->name('sendmessageall');
                /*
To retrieve unapproved profiles from a system, you can specify date ranges to filter the profiles. This process allows you to focus on specific time periods and identify unapproved profiles that may have been missed during previous reviews. Additionally, you can filter profiles by message content, which allows you to identify profiles that may contain inappropriate language or content. By conducting a thorough review of unapproved profiles, you can ensure that your system remains safe and appropriate for all users.
*/
                Route::get('day-range-wise-data', [UserDataController::class, 'dayRangeWiseData'])->name('dayrangewisedata');
                Route::get('pending-profile-data', [UserDataController::class, 'profileDataApproval'])->name('pendingprofiledata');
                Route::post('approve-user-profile', [UserDataController::class, 'approveUserProfile'])->name('approveuserprofile');
                Route::get('reject-profile-during-approve', [UserDataController::class, 'rejectUserProfile'])->name('rejectuserprofile');
                Route::get('rejected-profiles', [UserDataController::class, 'rejectedProfiles'])->name('rejectedprofiles');
                Route::get('rejected-profiles-list', [UserDataController::class, 'getRejectedProfiles'])->name('rejectedprofilesdata');
                Route::get('approved-profiles', [UserDataController::class, 'approvedProfiled'])->name('approvedprofiles');
                Route::get('get-approved-profiles', [UserDataController::class, 'getApprovedProfiles'])->name('getapprovedprofiles');
                Route::get('double-approval-profiles', [UserDataController::class, 'getDoubleApproveProfile'])->name('doubleapproveprofile');
                Route::post('double-approval-profiles', [UserDataController::class, 'doubleApproveProfile'])->name('getdoubleapproveprofile');
                Route::get('un-approved-photos', [UserDataController::class, 'getUnapprovedPhotos'])->name('getunapprovedphotos');
                Route::post('save-profile-list-send', [PsDashboardController::class, 'saveSendProfileList'])->name('saveprofilelistsend');
                Route::get('send-profile-list', [PsDashboardController::class, 'sendProfileListUser'])->name('sendprofilelist');
                Route::get('send-whatsapp-message', [UserDataController::class, 'sendWhatsAppMessageCommon'])->name('sendWhatsAppMessageCommon');
                Route::get('client-call-interaction', [UserDataController::class, 'viewCallInteractPage'])->name('clientcallinteract');
                Route::get('get-welcome-call-profiles', [UserDataController::class, 'getWelcomeCallData'])->name('getwelcomecallprofiles');
                Route::get('get-verification-call-profiles', [UserDataController::class, 'getVerificationCallData'])->name('getverificationcallprofiles');
                Route::post('mark-welcome-done', [UserDataController::class, 'markWelcomeDone'])->name('markwelcomedone');
                Route::post('mark-verification-done', [UserDataController::class, 'markVerificationDone'])->name('markverificationdone');
                Route::get('get-unapproved-photo-with-details', [UserPhotoController::class, 'getUSerPics'])->name('getuserunapprovedphotos');
                Route::post("take-action-on-pics", [UserPhotoController::class, 'actionOnImages'])->name('takeactiononpics');
                Route::get('incomplete-leads-pending', [UserDataController::class, 'incompleteLeadsPending'])->name('incompleteleadspending');
                Route::get('incomplete-leads-pending-list', [UserDataController::class, 'incompleteLeadsPendingList'])->name('incompleteleadspendinglist');
        });

        /*
Our company's personalized dashboard is designed to cater to the needs of all relationship managers. With our state-of-the-art dashboard, managers can easily track and manage client relationships, monitor sales performance, and keep track of important tasks and deadlines. The dashboard is user-friendly and customizable to fit the unique needs of each manager. Additionally, we offer a comprehensive training program to ensure that managers can fully utilize all the features and benefits of our dashboard. With our cutting-edge technology and exceptional customer support, our dashboard is a perfect solution for relationship managers who are looking to streamline their workflow and improve their performance.
*/
        Route::prefix('personalized-dashboard')->group(function () {
                /*
As I review the list of all profiles assigned to me, I am struck by the sheer variety of the individuals represented. Each profile tells a unique story, with its own set of strengths, weaknesses, and areas for growth. As I consider each profile in turn, I am reminded of the importance of taking a personalized approach to mentorship and support, tailoring my guidance to each individual's specific needs and goals. I am grateful for the opportunity to work with such a diverse and talented group of individuals, and look forward to the insights and growth that will undoubtedly come from this experience.
*/
                Route::get('database', [PsDashboardController::class, 'index'])->name('database');
                Route::get('mine-user-datalist', [PsDashboardController::class, 'myUserList'])->name('myuserlist');

                Route::post('update-user-validity', [UserPreferenceController::class, 'updateUserValidity'])->name('updateuservalidity');
                /*
The system will operate on the basis of matching profiles with each other according to their preferences. This will be done by analyzing the data provided in each profile, taking into account the various parameters that are relevant to the matching process. For example, the system will consider factors such as the user's age, gender, location, interests, and hobbies, among others. Additionally, users will have the ability to customize their preferences according to their own specific needs and requirements, ensuring that they are matched with like-minded individuals who share similar interests and values.
*/
                Route::get('find-match', [PsDashboardController::class, 'findMatchView'])->name('findmatch');
                /*
One potential revision to consider would be to expand on the details of the process for updating profiles. This could include information on the frequency with which profiles are updated, the specific day on which profiles are sent, and the criteria used to determine which profiles are selected for sending. Additionally, it may be useful to provide more context on the purpose of sending profiles on a particular day, such as how it fits into the broader goals and objectives of the organization. Another option would be to discuss the various stakeholders involved in the profile update process, and their respective roles and responsibilities. By including these additional details and insights, we can provide a more comprehensive and informative document for the intended audience.
*/
                Route::post('update-profile-sent-day', [PsDashboardController::class, 'profileSentDay'])->name('updtepropfilesentday');
                Route::get('profile-lists-pdf', [PsDashboardController::class, 'displayProfilePdfs'])->name('pdfprofiles');
                /*
In order to improve the user experience, we may need to provide more detailed information related to the user's action of choice. For instance, when a user's action is "rejected," we could provide a more detailed message explaining why the user's choice was rejected. Similarly, when a user's action is "selected," we could provide more information on what happens next in the user's journey. Additionally, when a user's action is "shortlisted," we could provide more information on the next steps in the selection process. By providing more information, we can help to ensure that users have a clear understanding of their status and what they can expect going forward.
*/
                Route::get('update-user-action', [PsDashboardController::class, 'updateUserAction'])->name('updateuseraction');
                Route::get('get-contacted-user-list', [PsDashboardController::class, 'getContactedUserList'])->name('getcontacteduserlist');
                Route::post('update-premium-meeting', [PsDashboardController::class, 'updatecontactedStatus'])->name('updatepremiummeetingstatus');
                Route::get('get-all-preimum-meeting-list', [PsDashboardController::class, 'getAllPremiumLkedProfile'])->name('getallpreimumeetinglist');
                /*
As per our records, a list of profiles has been sent to the users in the past. It is important to keep the users engaged by providing them with regular updates. Therefore, we suggest sending the list of profiles on a daily basis. Additionally, it might be helpful to include some details about each profile, such as their experience, skills, and interests. This will give users a better understanding of the profiles and help them make informed decisions. We recommend adding a brief summary at the end of each day's list to provide some context and encourage users to continue engaging with the service.
*/
                Route::get('day-wise-profile-sent', [PsDashboardController::class, 'dayWiseProfileStndList'])->name('daywiseprofilesent');
                Route::get('send-profile-list-user-matches', [PsDashboardController::class, 'sentListUserMatch'])->name('sentprofilefromusermatch');
                Route::get('overall-yes-pending', [PsDashboardController::class, 'overallYesPending'])->name('yespending');
                Route::get('today-sent-list', [PsDashboardController::class, 'todaySentList'])->name('todaysentlist');
                /*
The following is a list of users who have not had their weekly reports sent out for their profiles. This list includes individuals who may have had technical difficulties or who may have been inadvertently overlooked in the distribution process. It is important to ensure that all users receive the necessary information in a timely manner, and steps will be taken to rectify any issues that may have arisen in the distribution of these reports. Furthermore, we will be implementing new procedures to ensure that all users are included in the regular distribution of their weekly reports going forward.
*/
                Route::get('weekly-profile-not-sent', [PsDashboardController::class, 'weeklyProfileNotSent'])->name('weeklyprofilenotsent');
                Route::get('weekly-profile-not-sent-data', [PsDashboardController::class, 'weeklyProfileNotSentData'])->name('weeklyprofilenotsentdata');
                /*
One of the most useful features of a notes app is the ability to save important information for future reference. Whether it's jotting down ideas, recording meeting minutes, or simply keeping track of daily tasks, notes can provide a convenient way to store and organize information. In fact, by using notes to keep track of important things, you can easily recall details that might otherwise be forgotten. Additionally, having notes as a reference can help you to stay on top of important deadlines, stay organized, and even increase productivity. Therefore, it's essential to have a reliable notes app that can help you to keep track of all your important information in one place.
*/
                Route::post('save-user-notes', [UserPreferenceController::class, 'saveUserNotes'])->name('saveusernotes');
                Route::get('overall-yes-meeting', [PsDashboardController::class, 'overallYesMeeting'])->name('overallyesmeeting');
                Route::get('overall-yes-meeting-list', [PsDashboardController::class, 'loadAllPremiumMeetingList'])->name('overallyesmeetinglist');
                Route::get("get-transfer-profile-view", [PsDashboardController::class, "transferProfileView"])->name('transferprofile');
                Route::get('get-templewise-user-profile-list', [PsDashboardController::class, "transferProfileData"])->name('gettempleprofiles');
                Route::post('transfer-lead-to-temple', [PsDashboardController::class, "transferProfiles"])->name('transferleadtoteple');
                /*
An issue that needs to be addressed is the overall pending list of users whose actions are not being taken on their behalf. This list could include users who have reported issues or submitted requests for assistance, but have not received any response or resolution from the company. It is important to review this list regularly and ensure that all users receive appropriate attention and support. In addition, it may be beneficial to implement a system to track and prioritize these pending requests in order to ensure timely and effective resolution. By taking proactive steps to address these pending requests, the company can improve overall customer satisfaction and loyalty.
*/
                Route::get('overall-pending-list', [PsDashboardController::class, 'overallPendingData'])->name('overallpendinglist');
                Route::get('over-all-pending-user-list', [PsDashboardController::class, 'overAllPendingListView'])->name('overalluserpendinglist');
                /*
Based on the text, it seems like there is a list of users who have yet to respond with a "yes" or "no". It would be helpful to follow up with these users to ensure that their responses are properly recorded. Additionally, it may be worth considering sending out reminders or offering additional incentives to encourage them to respond. Ultimately, having a complete and accurate list of responses will be crucial for making informed decisions moving forward.
*/
                Route::get('overall-yes-pending-list', [PsDashboardController::class, 'overallYesPendingData'])->name('yespendinglist');
                Route::get('over-all-yes-pending-user-list', [PsDashboardController::class, 'overAllYesPendingListView'])->name('overallyesuserpendinglist');
                Route::get("get-overall-yes-pending-user-data", [PsDashboardController::class, 'overAllTesMeetingList'])->name("getoverallyespendinguserdata");
                Route::get("history-details", [PsDashboardController::class, 'historyDetails'])->name("historydetails");
                Route::post('save-basic-profile', [PsDashboardController::class, 'saveBasicProfile'])->name('savebasicprofile');
        });

        // customer care routes
        Route::prefix('custmer-care')->group(function () {
                Route::get('open-tickets', [ComplainController::class, 'index'])->name('opentickets');
                Route::get('get-all-open-tickets', [ComplainController::class, 'getOpenTicekets'])->name('getallopentickets');
                Route::get('get-all-ticket-counts', [ComplainController::class, 'getAllTiceketCount'])->name('getallticketcounts');
                Route::get('get-my-ticket-counts', [ComplainController::class, 'getMyTiceketCount'])->name('getmyticketcounts');
                Route::post('resolve-ticket', [ComplainController::class, 'resolveTicket'])->name('resolveticket');
                Route::get('assign-open-ticket-to-me', [ComplainController::class, 'assignOpenTicket'])->name('assignopenticket');
                Route::get('my-open-tickets', [ComplainController::class, 'myOpenTicketView'])->name('myopenticket');
                Route::get('get-my-open-tickets', [ComplainController::class, 'getMyOpenTickets'])->name('getmyopentickets');
                Route::post('update-ticket-status', [ComplainController::class, '/858jyfxxicketStatus'])->name('updateticket');
                Route::post('add-new-ticket', [ComplainController::class, 'createNewTicket'])->name('addnewticket');
                Route::get('serach-by-mobile', [UserDataController::class, 'userByMobile'])->name('serachbymobile');
                Route::get('serach-by-mobile-mydb', [UserDataController::class, 'userByMobile'])->name('serachbymobileydb');
                Route::get('all-record-group-wise', [ComplainController::class, 'allRecordData'])->name('detailedview');
                Route::get('all-record-group-wise-data', [ComplainController::class, 'allRecordGetData'])->name('detailedviewdata');
                Route::get('get-user-all-tickets', [ComplainController::class, 'userTicketsByMobile'])->name('getallusertickets');
                Route::get('get-all-complain-category', [ComplainController::class, 'getComplainCategory'])->name('getcomplaincategory');
        });

        // common routes for all users
        Route::prefix('common-routes')->group(function () {
                Route::get('sample-profiles', [PsDashboardController::class, 'sampleProfile'])->name('sampleprofile');
                Route::get('sample-profiles-data', [PsDashboardController::class, 'getSampleFilteredProfiles'])->name('sendsampleprofile');
                Route::post('delete-user-pic', [UserDataController::class, 'deleteUSerPic'])->name('deleteuserpic');
                Route::post('save-user-credits', [UserDataController::class, 'addUserCredit'])->name('addusercredit');
                Route::get('all-rm-list', [UserController::class, 'getAllRmList'])->name('allrmlist');
                Route::get('my-database-crm', [UserDataController::class, 'myCrmDatabse'])->name('mydatabsecrm');
                Route::get('count-user-data', [DashboardController::class, 'counteUserData'])->name('counteuserdata');
                Route::get('over-all-search', [UserDataController::class, 'overAllSearch'])->name('overallsearch');
        });

        Route::prefix('other-stuffs')->group(function () {
                /*
This document describes the process of experiencing a user dashboard. When the user logs in, they will be prompted to verify their OTP (one-time password) for security purposes. Once the OTP has been verified, the user will be able to access their dashboard, which provides a range of features and information. For example, the dashboard may display the user's recent activity, such as their most recent purchases or interactions with other users. It may also include tools for managing the user's account, such as changing their password or updating their personal information. Overall, the user dashboard is a powerful tool that enables users to engage with the platform in a more meaningful way.
*/
                Route::get('login-others-account', [UserController::class, 'loginOtherView'])->name('loginotersaccount');
                Route::get('get-all-users', [UserController::class, 'index'])->name('getallusers');
                Route::get('login-other-account', [UserController::class, 'loginOtherAccount'])->name('loginotheraccount');
                /*
When it comes to managing a database related to Facebook, there are a number of factors that come into play. One important consideration is how to effectively query the database to obtain the desired information. This can involve utilizing various search algorithms and database management techniques to ensure that the query results are accurate and relevant.
Additionally, it is important to consider the size and complexity of the database in question. As the amount of data contained within the database grows, it becomes increasingly difficult to manage and organize the information in a way that is both efficient and effective. This can require the use of specialized tools and software designed specifically for large-scale database management.
Overall, effective Facebook database management requires a combination of technical knowledge, strategic planning, and a deep understanding of the underlying database architecture. By implementing best practices and staying up-to-date with the latest trends and technologies, businesses can ensure that their Facebook databases are well-managed and optimized for success.
*/
                Route::get('manage-category-relations', [CategoryController::class, 'index'])->name('managecategory');
                Route::get('get-relation-categories', [CategoryController::class, 'getRelationCategory'])->name('getrelationcats');
                Route::post('save-relation-categories', [CategoryController::class, 'saveRelationCategory'])->name('savetrelationcats');
                Route::get('delete-relation-categories', [CategoryController::class, 'deleteRelationCategory'])->name('deleterelcat');

                Route::get('all-temple-relation', [CategoryController::class, 'allTempleRelation'])->name('alltemplerelation');
                Route::post('save-assign-relation-cats', [CategoryController::class, 'saveAssignRelation'])->name('saveassigntrelationcats');
                Route::get('delete-assigned-relation', [CategoryController::class, 'deleteRelaion'])->name('deleteassignedrelation');
                Route::get('get-facebook-query', [CategoryController::class, 'getFacebookQueryData'])->name('getfacebookquery');
                Route::get('get-website-query', [CategoryController::class, 'getWebsiteQueryData'])->name('getwebsitequery');

                Route::post('edit-facebook-query', [CategoryController::class, 'editFacebookQuery'])->name('editfacebookquery');
                Route::post('edit-website-query', [CategoryController::class, 'editWebQuery'])->name('editwebquery');

                Route::post('save-user-details', [UserController::class, 'saveUserDetails'])->name('saveuserdetails');

                Route::get('manage-team-leader', [TeamLeaderController::class, 'manageTeamLeader'])->name('manageteamleader');
                Route::get('list-team-leader', [TeamLeaderController::class, 'leadTeamLeaders'])->name('listteamleader');
                Route::get('get-team-leader-team', [TeamLeaderController::class, 'getTeamList'])->name('getteamlists');
                Route::post('manage-team-leader-list', [TeamLeaderController::class, 'manageTeamleraderList'])->name('updateteamleaderlist');
        });

        // hr dashboard routes
        Route::prefix('hrms')->group(function () {
                Route::get('emplouyees-page', [UserController::class, 'getEmployeesPage'])->name('employeespage');
                Route::get('employee-attendanec', [AttendanceController::class, 'index'])->name('employeesattpage');
                Route::get('get-att-report', [AttendanceController::class, 'getAttendanceReport'])->name('getattreport');
                Route::get('get-detailed-att-report', [AttendanceController::class, 'getDetailedAttendanceReport'])->name('getattdetailedreport');
                Route::get('detailed-atendance-data', [AttendanceController::class, 'getDetailedAttendanceData'])->name('detailedatendancedata');
        });

        // mislenious routes
        Route::get('get-user-data-by-id', [UserDataController::class, 'getUserDataById'])->name('getuserdatabyid');
        Route::post('upload-user-image', [UserDataController::class, 'uploadUserImage'])->name('uploaduserimage');
        Route::get('my-database', [UserController::class, 'myDatabase'])->name('mydatabase');
        Route::post('update-user-profile', [UserDataController::class, 'updateUserProfile'])->name('updateuserprofile');
        Route::get('get-filtered-profiles', [PsDashboardController::class, 'getFilteredProfiles'])->name('getfilteredprofiles');
        Route::get('match-kundli-score', [KundliController::class, 'matchProfileKundli'])->name('matchkundliscore');
        Route::post("save-facebbook-token", [ChannelController::class, 'saveFbToken'])->name('savefbtoken');
        Route::get('mark-profile-married', [UserDataController::class, 'markMarried'])->name('markprofilemarried');
        Route::get('mark-profile-premium', [UserDataController::class, 'markPremium'])->name('markprofilepremium');
});

// Open Routes for common data like dropdown and all that starts
Route::get('all-religion', [ReligionController::class, 'getAllReligion'])->name('allreligion');
Route::get('get-all-educations', [FormDataController::class, 'getAllEducations'])->name('getalleducations');
Route::get('get-all-cities', [FormDataController::class, 'getAllCities'])->name('getallcities');
Route::get('get-all-castes', [FormDataController::class, 'getAllCastes'])->name('getallcastes');
Route::get('get-relation', [NodeController::class, 'relationMapping'])->name('getrelation');
Route::get('get-occupation', [NodeController::class, 'occupationList'])->name('getoccupation');
Route::get('get-parent-occupation', [NodeController::class, 'parentOccupations'])->name('getparentoccupation');
Route::get('get-manglik-status', [NodeController::class, 'manglikStatus'])->name('getmanglikstatus');
Route::get('get-marital-status', [NodeController::class, 'maritalStatus'])->name('getmaritalstatus');
Route::get('get-qualification-by-id', [NodeController::class, 'qualificationById'])->name('getqualificationById');
Route::get('get-all-countries', [NodeController::class, 'getAllCountries'])->name('getallcountries');
Route::get('get-all-temples', [UserController::class, 'getAllTemples'])->name('getalltemples');
// Open Routes Ends


// admin login
Route::get('asrewgfgwerda89898asda', function () {
        return view('auth.login');
});

Route::get('indexpage', function () {
        return view('index');
});

Route::post('login-users', [UserController::class, 'loginUsersUsingOTP'])->name('loginusers');
Route::post('verify-user-otp', [UserController::class, 'verifyUserMobile'])->name('verifyuserotp');
Route::post('admin-login', [UserController::class, 'adminLogin'])->name('adminlogin');
Auth::routes([
        'register' => false, // Registration Routes...
        'reset' => false, // Password Reset Routes...
        'verify' => false, // Email Verification Routes...
        'login' => false, // Email Verification Routes...
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/cache-clear', function () {
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('optimize:clear');
        echo "cache cleared";
});

Route::get('/update-user-data-id', [LeadController::class, 'upadteUserDataId']);
Route::get('add-lead-telesales-without-login', [AddLeadDirectly::class, 'index']);
Route::get('/update-user-data-by-id', [AddLeadDirectly::class, 'upadteUserDataById']);
Route::post('add-lead-telesales-without-login', [AddLeadDirectly::class, 'store']);

// migration routes
Route::get("populate-user-data", [MigrationController::class, 'getProfileDataAndSave']);
Route::get("populate-user-data-leads", [MigrationController::class, 'checkAndUpdateLeads']);
Route::get("populate-master-data", [MigrationController::class, 'prepareCaste']);
Route::get("populate-master-cities", [MigrationController::class, 'dispacthCities']);
Route::get("update-name", [MigrationController::class, 'updateName']);
Route::get("update-compatblities", [MigrationController::class, 'updateCompatblities']);
Route::get("update-preference", [MigrationController::class, 'updatePreference']);
Route::get("update-user-data-id", [MigrationController::class, 'updateUserDataId']);
Route::get('generate-profile-pdf', [PsDashboardController::class, 'displayProfilePdfs'])->name('pdfprofilessave');
Route::get('show-multiple-profiles', [PsDashboardController::class, 'CreateProfilePdfs'])->name('showprofilesingroup');
Route::get('login-hans-users', [UserController::class, 'loginHansUsers']);
