<?php
    use App\Models\Utility;
    $setting = \App\Models\Utility::settings();
    $logo = \App\Models\Utility::get_file('uploads/logo');

    $company_logo = $setting['company_logo_dark'] ?? '';
    $company_logos = $setting['company_logo_light'] ?? '';
    $company_small_logo = $setting['company_small_logo'] ?? '';

    $emailTemplate = \App\Models\EmailTemplate::emailTemplateData();
    $lang = Auth::user()->lang;

    $userPlan = \App\Models\Plan::getPlan(\Auth::user()->show_dashboard());
?>

<?php if(isset($setting['cust_theme_bg']) && $setting['cust_theme_bg'] == 'on'): ?>
    <nav class="dash-sidebar light-sidebar transprent-bg">
    <?php else: ?>
        <nav class="dash-sidebar light-sidebar ">
<?php endif; ?>
<div class="navbar-wrapper">
    <div class="m-header main-logo">
        <a href="#" class="b-brand">
            

            <?php if($setting['cust_darklayout'] && $setting['cust_darklayout'] == 'on'): ?>
                <img src="<?php echo e($logo . '/' . (isset($company_logos) && !empty($company_logos) ? $company_logos : 'logo-dark.png')); ?>"
                    alt="<?php echo e(config('app.name', 'ERPGo-SaaS')); ?>" class="logo logo-lg">
            <?php else: ?>
                <img src="<?php echo e($logo . '/' . (isset($company_logo) && !empty($company_logo) ? $company_logo : 'logo-light.png')); ?>"
                    alt="<?php echo e(config('app.name', 'ERPGo-SaaS')); ?>" class="logo logo-lg">
            <?php endif; ?>

        </a>
    </div>
    <div class="navbar-content">
        <?php if(\Auth::user()->type != 'client'): ?>
            <ul class="dash-navbar">
                <!--------------------- Start Dashboard ----------------------------------->
                <?php if(Gate::check('show hrm dashboard') ||
                        Gate::check('show project dashboard') ||
                        Gate::check('show account dashboard') ||
                        Gate::check('show crm dashboard') ||
                        Gate::check('show pos dashboard')): ?>
                    
                <?php endif; ?>
                <!--------------------- End Dashboard ----------------------------------->


                <!--------------------- Start HRM ----------------------------------->

                <?php if(!empty($userPlan) && $userPlan->hrm == 1): ?>
                    <?php if(Gate::check('manage employee') || Gate::check('manage setsalary')): ?>
                        <li
                            class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'holiday-calender' ||
                            Request::segment(1) == 'leavetype' ||
                            Request::segment(1) == 'leave' ||
                            Request::segment(1) == 'attendanceemployee' ||
                            Request::segment(1) == 'document-upload' ||
                            Request::segment(1) == 'document' ||
                            Request::segment(1) == 'performanceType' ||
                            Request::segment(1) == 'branch' ||
                            Request::segment(1) == 'department' ||
                            Request::segment(1) == 'designation' ||
                            Request::segment(1) == 'employee' ||
                            Request::segment(1) == 'leave_requests' ||
                            Request::segment(1) == 'holidays' ||
                            Request::segment(1) == 'policies' ||
                            Request::segment(1) == 'leave_calender' ||
                            Request::segment(1) == 'award' ||
                            Request::segment(1) == 'transfer' ||
                            Request::segment(1) == 'resignation' ||
                            Request::segment(1) == 'training' ||
                            Request::segment(1) == 'travel' ||
                            Request::segment(1) == 'promotion' ||
                            Request::segment(1) == 'complaint' ||
                            Request::segment(1) == 'warning' ||
                            Request::segment(1) == 'termination' ||
                            Request::segment(1) == 'announcement' ||
                            Request::segment(1) == 'job' ||
                            Request::segment(1) == 'job-application' ||
                            Request::segment(1) == 'candidates-job-applications' ||
                            Request::segment(1) == 'job-onboard' ||
                            Request::segment(1) == 'custom-question' ||
                            Request::segment(1) == 'interview-schedule' ||
                            Request::segment(1) == 'career' ||
                            Request::segment(1) == 'holiday' ||
                            Request::segment(1) == 'setsalary' ||
                            Request::segment(1) == 'payslip' ||
                            Request::segment(1) == 'paysliptype' ||
                            Request::segment(1) == 'company-policy' ||
                            Request::segment(1) == 'job-stage' ||
                            Request::segment(1) == 'job-category' ||
                            Request::segment(1) == 'terminationtype' ||
                            Request::segment(1) == 'awardtype' ||
                            Request::segment(1) == 'trainingtype' ||
                            Request::segment(1) == 'goaltype' ||
                            Request::segment(1) == 'paysliptype' ||
                            Request::segment(1) == 'allowanceoption' ||
                            Request::segment(1) == 'competencies' ||
                            Request::segment(1) == 'loanoption' ||
                            Request::segment(1) == 'deductionoption'
                                ? 'active dash-trigger'
                                : ''); ?>">
                            <a href="#!" class="dash-link ">
                                <span class="dash-micon">
                                    <i class="ti ti-user"></i>
                                </span>
                                <span class="dash-mtext">
                                    <?php echo e(__('HRM System')); ?>

                                </span>
                                <span class="dash-arrow">
                                    <i data-feather="chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dash-submenu">
                                
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage document')): ?>
                                    <li class="dash-item <?php echo e(request()->is('document-upload*') ? 'active' : ''); ?>">
                                        <a class="dash-link"
                                            href="<?php echo e(route('document-upload.index')); ?>"><?php echo e(__('Document Setup')); ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage company policy')): ?>
                                    <li class="dash-item <?php echo e(request()->is('company-policy*') ? 'active' : ''); ?>">
                                        <a class="dash-link"
                                            href="<?php echo e(route('company-policy.index')); ?>"><?php echo e(__('Company policy')); ?></a>
                                    </li>
                                <?php endif; ?>

                                <?php if(\Auth::user()->type == 'company' || \Auth::user()->type == 'HR'): ?>
                                    <li
                                        class="dash-item <?php echo e(Request::segment(1) == 'leavetype' ||
                                        Request::segment(1) == 'document' ||
                                        Request::segment(1) == 'performanceType' ||
                                        Request::segment(1) == 'unit' ||
                                        Request::segment(1) == 'section' ||
                                        Request::segment(1) == 'assets-type' ||
                                        Request::segment(1) == 'branch' ||
                                        Request::segment(1) == 'department' ||
                                        Request::segment(1) == 'designation' ||
                                        Request::segment(1) == 'job-stage' ||
                                        Request::segment(1) == 'performanceType' ||
                                        Request::segment(1) == 'job-category' ||
                                        Request::segment(1) == 'terminationtype' ||
                                        Request::segment(1) == 'awardtype' ||
                                        Request::segment(1) == 'trainingtype' ||
                                        Request::segment(1) == 'goaltype' ||
                                        Request::segment(1) == 'paysliptype' ||
                                        Request::segment(1) == 'allowanceoption' ||
                                        Request::segment(1) == 'loanoption' ||
                                        Request::segment(1) == 'deductionoption'
                                            ? 'active dash-trigger'
                                            : ''); ?>">
                                        <a class="dash-link"
                                            href="<?php echo e(route('branch.index')); ?>"><?php echo e(__('HRM System Setup')); ?></a>
                                    </li>
                                <?php endif; ?>


                        </ul>
                    </li>
                <?php endif; ?>
            <?php endif; ?>

            <!--------------------- End HRM ----------------------------------->

            <!--------------------- Start Account ----------------------------------->


            <!--------------------- End Account ----------------------------------->

            <!--------------------- Start CRM ----------------------------------->

            

        <!--------------------- End CRM ----------------------------------->

        <!--------------------- Start Project ----------------------------------->

        

        <!--------------------- End Project ----------------------------------->



        <!--------------------- Start User Managaement System ----------------------------------->

        

        <!--------------------- End User Managaement System----------------------------------->


        <!--------------------- Start Products System ----------------------------------->


        <!--------------------- End Products System ----------------------------------->


        <!--------------------- Start POs System ----------------------------------->
        
        <!--------------------- End POs System ----------------------------------->

        

        <!--------------------- Start System Setup ----------------------------------->





        <!--------------------- End System Setup ----------------------------------->
        </ul>
        <?php endif; ?>
        <?php if(\Auth::user()->type == 'client'): ?>
            <ul class="dash-navbar">
                <?php if(Gate::check('manage client dashboard')): ?>
                    <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'dashboard' ? ' active' : ''); ?>">
                        <a href="<?php echo e(route('client.dashboard.view')); ?>" class="dash-link">
                            <span class="dash-micon"><i class="ti ti-home"></i></span><span
                                class="dash-mtext"><?php echo e(__('Dashboard')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if(Gate::check('manage deal')): ?>
                    <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'deals' ? ' active' : ''); ?>">
                        <a href="<?php echo e(route('deals.index')); ?>" class="dash-link">
                            <span class="dash-micon"><i class="ti ti-rocket"></i></span><span
                                class="dash-mtext"><?php echo e(__('Deals')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if(Gate::check('manage contract')): ?>
                    <li
                        class="dash-item dash-hasmenu <?php echo e(Request::route()->getName() == 'contract.index' || Request::route()->getName() == 'contract.show' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('contract.index')); ?>" class="dash-link">
                            <span class="dash-micon"><i class="ti ti-rocket"></i></span><span
                                class="dash-mtext"><?php echo e(__('Contract')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if(Gate::check('manage project')): ?>
                    <li class="dash-item dash-hasmenu  <?php echo e(Request::segment(1) == 'projects' ? ' active' : ''); ?>">
                        <a href="<?php echo e(route('projects.index')); ?>" class="dash-link">
                            <span class="dash-micon"><i class="ti ti-share"></i></span><span
                                class="dash-mtext"><?php echo e(__('Project')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if(Gate::check('manage project')): ?>
                    <li
                        class="dash-item  <?php echo e(Request::route()->getName() == 'project_report.index' || Request::route()->getName() == 'project_report.show' ? 'active' : ''); ?>">
                        <a class="dash-link" href="<?php echo e(route('project_report.index')); ?>">
                            <span class="dash-micon"><i class="ti ti-chart-line"></i></span><span
                                class="dash-mtext"><?php echo e(__('Project Report')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(Gate::check('manage project task')): ?>
                    <li class="dash-item dash-hasmenu  <?php echo e(Request::segment(1) == 'taskboard' ? ' active' : ''); ?>">
                        <a href="<?php echo e(route('taskBoard.view', 'list')); ?>" class="dash-link">
                            <span class="dash-micon"><i class="ti ti-list-check"></i></span><span
                                class="dash-mtext"><?php echo e(__('Tasks')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(Gate::check('manage bug report')): ?>
                    <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'bugs-report' ? ' active' : ''); ?>">
                        <a href="<?php echo e(route('bugs.view', 'list')); ?>" class="dash-link">
                            <span class="dash-micon"><i class="ti ti-bug"></i></span><span
                                class="dash-mtext"><?php echo e(__('Bugs')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(Gate::check('manage timesheet')): ?>
                    <li
                        class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'timesheet-list' ? ' active' : ''); ?>">
                        <a href="<?php echo e(route('timesheet.list')); ?>" class="dash-link">
                            <span class="dash-micon"><i class="ti ti-clock"></i></span><span
                                class="dash-mtext"><?php echo e(__('Timesheet')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(Gate::check('manage project task')): ?>
                    <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'calendar' ? ' active' : ''); ?>">
                        <a href="<?php echo e(route('task.calendar', ['all'])); ?>" class="dash-link">
                            <span class="dash-micon"><i class="ti ti-calendar"></i></span><span
                                class="dash-mtext"><?php echo e(__('Task Calender')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <li class="dash-item dash-hasmenu">
                    <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'support' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('support.index')); ?>" class="dash-link">
                            <span class="dash-micon"><i class="ti ti-headphones"></i></span><span
                                class="dash-mtext"><?php echo e(__('Support System')); ?></span>
                        </a>
                    </li>
                </li>
            </ul>
        <?php endif; ?>
        <?php if(\Auth::user()->type == 'super admin'): ?>
            <ul class="dash-navbar">
                <?php if(Gate::check('manage super admin dashboard')): ?>
                    <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'dashboard' ? ' active' : ''); ?>">
                        <a href="<?php echo e(route('client.dashboard.view')); ?>" class="dash-link">
                            <span class="dash-micon"><i class="ti ti-home"></i></span><span
                                class="dash-mtext"><?php echo e(__('Dashboard')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>


                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage user')): ?>
                    <li
                        class="dash-item dash-hasmenu <?php echo e(Request::route()->getName() == 'users.index' || Request::route()->getName() == 'users.create' || Request::route()->getName() == 'users.edit' ? ' active' : ''); ?>">
                        <a href="<?php echo e(route('users.index')); ?>" class="dash-link">
                            <span class="dash-micon"><i class="ti ti-users"></i></span><span
                                class="dash-mtext"><?php echo e(__('Companies')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(Gate::check('manage plan')): ?>
                    <li class="dash-item dash-hasmenu  <?php echo e(Request::segment(1) == 'plans' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('plans.index')); ?>" class="dash-link">
                            <span class="dash-micon"><i class="ti ti-trophy"></i></span><span
                                class="dash-mtext"><?php echo e(__('Plan')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if(\Auth::user()->type == 'super admin'): ?>
                <li class="dash-item dash-hasmenu <?php echo e(request()->is('plan_request*') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('plan_request.index')); ?>" class="dash-link">
                        <span class="dash-micon"><i class="ti ti-arrow-up-right-circle"></i></span><span
                            class="dash-mtext"><?php echo e(__('Plan Request')); ?></span>
                    </a>
                </li>
            <?php endif; ?>

                <li class="dash-item dash-hasmenu  <?php echo e(Request::segment(1) == '' ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('referral-program.index')); ?>" class="dash-link">
                        <span class="dash-micon"><i class="ti ti-discount-2"></i></span><span
                            class="dash-mtext"><?php echo e(__('Referral Program')); ?></span>
                    </a>
                </li>


                <?php if(Gate::check('manage coupon')): ?>
                    <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'coupons' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('coupons.index')); ?>" class="dash-link">
                            <span class="dash-micon"><i class="ti ti-gift"></i></span><span
                                class="dash-mtext"><?php echo e(__('Coupon')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if(Gate::check('manage order')): ?>
                    <li class="dash-item dash-hasmenu  <?php echo e(Request::segment(1) == 'orders' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('order.index')); ?>" class="dash-link">
                            <span class="dash-micon"><i class="ti ti-shopping-cart-plus"></i></span><span
                                class="dash-mtext"><?php echo e(__('Order')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <li
                    class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'email_template' || Request::route()->getName() == 'manage.email.language' ? ' active dash-trigger' : 'collapsed'); ?>">
                    <a href="<?php echo e(route('manage.email.language', [$emailTemplate->id, \Auth::user()->lang])); ?>"
                        class="dash-link">
                        <span class="dash-micon"><i class="ti ti-template"></i></span>
                        <span class="dash-mtext"><?php echo e(__('Email Template')); ?></span>
                    </a>
                </li>

                <?php if(\Auth::user()->type == 'super admin'): ?>
                    <?php echo $__env->make('landingpage::menu.landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>

                <?php if(Gate::check('manage system settings')): ?>
                    <li
                        class="dash-item dash-hasmenu <?php echo e(Request::route()->getName() == 'systems.index' ? ' active' : ''); ?>">
                        <a href="<?php echo e(route('systems.index')); ?>" class="dash-link">
                            <span class="dash-micon"><i class="ti ti-settings"></i></span><span
                                class="dash-mtext"><?php echo e(__('Settings')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

            </ul>
        <?php endif; ?>


        <div class="navbar-footer border-top ">
            <div class="d-flex align-items-center py-3 px-3 border-bottom">
                
                
            </div>
        </div>
    </div>
</div>
</nav>
<?php /**PATH C:\xampp\htdocs\erp\resources\views/partials/admin/menu.blade.php ENDPATH**/ ?>