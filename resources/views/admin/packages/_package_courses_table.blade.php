<div class="table-responsive">
          <table id="table-package-courses" class="table table-bordered table-striped table-hover">
               <thead>
                  <th class="col-sm-1 checkall"><input type="checkbox" id="checkall"/></th>
                  <th class="col-sm-2 center">No Of Main Course</th>
                  <th class="col-sm-6 right">Price Per Head</th>
                  <th class="col-sm-1 edit">Edit</th>
                  <th class="col-sm-1 delete">Delete</th>
               </thead>
               <tbody>
                  @foreach($package_courses as $package_course)
                      <tr>
                          <td></td>
                          <td class="center">{{ $package_course->no_of_main_courses }}</td>
                          <td class="right">{{ $package_course->price_per_head }}</td>
                          <td class="edit">
                              <p data-placement="top" data-toggle="tooltip" title="Edit">
                                  <a href="{{ route('admin.package-course.edit',['id' => $package_course->id]) }}" onclick="PackageCourse.edit(this); return false;" class="edit btn btn-primary btn-xs" data-title="Edit" data-target="#edit-package-course-modal">
                                      <span class="glyphicon glyphicon-pencil"></span>
                                  </a>
                              </p>
                          </td>
                          <td class="delete">
                              <p data-placement="top" data-toggle="tooltip" title="Delete">
                                  <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >
                                      <span class="glyphicon glyphicon-trash"></span>
                                  </button>
                              </p>
                          </td>
                      </tr>
                  @endforeach
               </tbody>
          </table>
      </div>