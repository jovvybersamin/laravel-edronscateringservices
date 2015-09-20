<div class="edit-tabs">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#package-courses" aria-controls="package-courses" role="tab" data-toggle="tab">Package Courses</a></li>
    <li role="presentation"><a href="#package-rules" aria-controls="package-rules" role="tab" data-toggle="tab">Package Rules</a></li>
    <li role="presentation"><a href="#menu-items" aria-controls="menu-items" role="tab" data-toggle="tab">Menu Items</a></li>
    <li role="presentation"><a href="#media" aria-controls="media" role="tab" data-toggle="tab">Media</a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="package-courses">

        @include('admin.packages.partials.title-section',['title' => 'Package Courses', 'showAction' => true,'target' => '#package-courses-modal'])

        <div class="package_courses">
           @include('admin.packages._package_courses_table',[
                    'package_courses' => $package_courses,
            ])

            @include('admin.packages.modals.package_courses')
            @include('admin.packages.modals.package_courses._edit_modal_package_courses')
        </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="package-rules">
        @include('admin.packages.partials.title-section',
                    [
                        'title' => 'Package Rules',
                        'showAction' => true,
                        'target' => '#package-rule-modal',
                        'onClick' => 'PackageRule.create(this);',
                    ])

        <div class="package_rules">
             @include('admin.packages._package_rules_table',[
                        'package_rules' => $package_rules,
                ])

             @include('admin.packages.modals.package_rules._create_package_rule')
             @include('admin.packages.modals.package_rules._edit_package_rule_modal')
        </div>

    </div>

    <div role="tabpanel" class="tab-pane" id="menu-items">
        @include('admin.packages.partials.title-section',
                    [
                        'title' => 'Package Menu Items',
                        'showAction' => true,
                        'target' => '#package-menuitems-modal',
                        'class' => 'addMenuItem',
                        'onClick' => 'PackageMenuItem.edit(this);',
                        'href'    => route('admin.package-menuitem.getModalTable',$package->id)
                    ]);

        @include('admin.packages._package_menuitems_table')
        @include('admin.packages.modals.package_menuitems._modal')
    </div>

    <div role="tabpanel" class="tab-pane" id="media">
        <div class="package_media">
             @include('admin.packages.partials.media')
        </div>
    </div>
  </div>
</div>