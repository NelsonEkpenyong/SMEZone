<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Industries;
use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AddEventRequest;
use App\Http\Requests\AddCourseRequest;
use App\Http\Requests\OpportunityRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Http\Requests\AddIndustryRequest;
use App\Http\Requests\CourseCategoryRequest;
use App\Http\Requests\webinarRecordingsRequest as webRequest;
use App\Http\Requests\NewsRequest;
use App\Http\Requests\DigestRequest;
use App\Models\EventType;
use App\Models\Event;
use App\Models\State;
use App\Models\Lga;
use App\Models\HeroSlider;
use App\Models\FeaturedImage;
use App\Models\CourseType;
use App\Models\Course;
use App\Models\UpcomingEventImage;
use App\Models\Certificates;
use App\Models\WebinarRecordings as web;
use App\Models\CourseCategories;
use App\Models\Post;
use App\Models\Price;
use App\Models\User;
use App\Models\News;
use App\Models\Roles;
use App\Models\UserTypes;
use App\Models\Genders;
use App\Models\OpportunityZone;
use Illuminate\Support\Str;
use App\Models\Licenses;
use App\Models\RadioDigest;
use File;
use Excel;


class AdminController extends Controller
{

    public function sliders()
    {
        $sliders = HeroSlider::all();

        return view('admin.sliders', compact('sliders'));
    }

    public function change_hero_slider(int $id)
    {
        $slider = HeroSlider::findOrFail($id);
        return view('admin.change-hero-slider', compact('slider', 'id'));
    }

    public function update_hero_slider(Request $request, int $id)
    {
        $media = HeroSlider::findOrFail($id);

        $data = [];
        if ($request->hasFile('photo')) {

            foreach ($request->photo as $image) {
                $temporaryFilePath = $image->getPathname();
                $image_info = getimagesize($temporaryFilePath);

                $image_width = $image_info[0];
                $image_height = $image_info[1];

                if ($image_width !== 1440 && !$image_height !== 455) {
                    return redirect()->back()->with('error', 'Landing page sider dimension must to be 1440 X 455');
                }

                $allowedfileExtensions = ['pdf', 'jpg', 'png', 'docx', 'jpeg', 'gif', 'svg'];
                $extension = $image->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtensions);

                if ($check) {
                    $file_name = Str::random(4) . '.' . $extension;
                    $image->move(public_path('images'), $file_name);
                    $data[] = $file_name;
                } else {
                    return redirect()->back()->with('error', 'File type not supported');
                }
            }
            $old_photo = $media->slider;
            $old_photo = json_decode($old_photo);

            foreach ($old_photo as $picture) {
                if ($picture) {
                    // unlink(storage_path('app/public/images/' . $picture));
                    unlink(public_path('images/') . $picture);
                }
            }

            $media->slider = json_encode($data);
            $media->save();
        }

        return redirect('/dashboard')->with('success', 'Image added successfully! 😃');

    }


    public function featured_image()
    {
        $featuredImage = FeaturedImage::all()->first();
        return view('admin.featured-image', compact('featuredImage'));
    }

    public function create_featured_image()
    {
        $featuredImage = FeaturedImage::all()->first();
        if ($featuredImage) {
            return redirect()->back()->with('warning', 'There can only be one featured Image. Update Instaed');
        }
        return view('admin.add-featured-image', compact('featuredImage'));
    }

    public function store_featured_image(Request $request)
    {
        try {
            $feturedImage = new FeaturedImage;
            $feturedImage->name = $request->name;
            $feturedImage->company = $request->company;
            $feturedImage->role = $request->role;
            $feturedImage->testimonial = $request->testimonial;
            $feturedImage->description = $request->description;

            if ($request->hasFile('photo')) {
                $allowedfileExtensions = ['pdf', 'jpg', 'png', 'docx', 'jpeg', 'gif', 'svg'];
                $image = $request->photo;

                $extension = $image->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtensions);
                if ($check) {
                    $file_name = Str::random(4) . '.' . $extension;
                    $image->move(public_path('images'), $file_name);
                } else {
                    return redirect()->back()->with('error', 'File type not supported');
                }
            }

            $feturedImage->featured_image = $file_name;
            $feturedImage->save();

            return redirect('/dashboard')->with('success', 'Featured Image added successfully! 😃');
        } catch (\Exception $error) {
            report($error->getMessage());
            return response()->json(['status' => false, 'message' => $error->getMessage()], 500);
        } catch (\Throwable $error) {
            report($error->getMessage());
            return response()->json(['status' => false, 'message' => $error->getMessage()], 500);
        }

    }

    public function update_featuredImage(int $id)
    {
        $featuredImage = FeaturedImage::findOrFail($id);
        return view('admin.update-featured-image', compact('featuredImage', 'id'));
    }

    public function update_featured_image(Request $request, int $id)
    {
        try {
            $feturedImage = FeaturedImage::findOrFail($id);
            $feturedImage->name = $request->name;
            $feturedImage->company = $request->company;
            $feturedImage->role = $request->role;
            $feturedImage->testimonial = $request->testimonial;
            $feturedImage->description = $request->description;

            if ($request->hasFile('photo')) {
                $allowedfileExtensions = ['pdf', 'jpg', 'png', 'docx', 'jpeg', 'gif', 'svg'];
                $image = $request->photo;

                $extension = $image->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtensions);
                if ($check) {
                    $file_name = Str::random(4) . '.' . $extension;
                    $image->move(public_path('images'), $file_name);
                } else {
                    return redirect()->back()->with('error', 'File type not supported');
                }

                $old_photo = $feturedImage->featured_image;

                if ($old_photo) {
                    unlink(public_path('images/') . $old_photo);
                    $feturedImage->featured_image = $file_name;
                } else {
                    $feturedImage->featured_image = $feturedImage->featured_image;
                }
            }

            $feturedImage->save();

            return redirect('/dashboard')->with('success', 'Featured Image updated successfully! 😃');
        } catch (\Exception $error) {
            report($error->getMessage());
            return response()->json(['status' => false, 'message' => $error->getMessage()], 500);
        } catch (\Throwable $error) {
            report($error->getMessage());
            return response()->json(['status' => false, 'message' => $error->getMessage()], 500);
        }
    }


    /* Featured Courses */
    public function featured_courses()
    {
        $featuredCourses = Course::where('is_featured', 1)->get();
        return view('admin.featured-courses', compact('featuredCourses'));
    }

    public function edit_featured_course(int $course)
    {
        $featuredCourse = Course::findOrFail($course);
        return view('admin.change-featured-courses', compact('featuredCourse'));
    }
    public function update_featured_courses(Request $request, int $id)
    {

        try {
            $featuredCourse = Course::findOrFail($id);

            if ($request->hasFile('photo')) {
                $image = $request->photo;
                $temporaryFilePath = $image->getPathname();
                $image_info = getimagesize($temporaryFilePath);

                $image_width = $image_info[0];
                $image_height = $image_info[1];

                if ($image_width !== 396 && !$image_height !== 245) {
                    return redirect()->back()->with('error', 'Featured course Image dimension must to be 396px X 245px');
                }

                $allowedfileExtensions = ['pdf', 'jpg', 'png', 'docx', 'jpeg', 'gif', 'svg'];


                $extension = $image->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtensions);

                if ($check) {
                    $file_name = Str::random(4) . '.' . $extension;
                    $image->move(public_path('images'), $file_name);
                } else {
                    return redirect()->back()->with('error', 'File type not supported');
                }

                $old_photo = $featuredCourse->image;

                if ($old_photo) {
                    unlink(public_path('images/') . $old_photo);
                    $featuredCourse->image = $file_name;
                } else {
                    $featuredCourse->image = $featuredCourse->image;
                }
            }

            $featuredCourse->save();

            return redirect('/dashboard')->with('success', 'Featured Course Image updated successfully! 😃');
        } catch (\Exception $error) {
            report($error->getMessage());
            return response()->json(['status' => false, 'message' => $error->getMessage()], 500);
        } catch (\Throwable $error) {
            report($error->getMessage());
            return response()->json(['status' => false, 'message' => $error->getMessage()], 500);
        }
    }

    public function upcoming_event_image()
    {
        $events = UpcomingEventImage::all();
        return view('admin.upcoming-event-image', compact('events'));
    }

    public function upcoming_event(int $id)
    {
        $upcomingEventImage = UpcomingEventImage::findOrFail($id);
        $events = Event::where('is_upcoming', 1)->get();
        return view('admin.update-upcoming-event', compact('upcomingEventImage', 'events'));
    }

    public function update_upcoming_event(Request $request, int $id)
    {
        try {
            $upcomingEventImage = UpcomingEventImage::findOrFail($id);
            $upcomingEventImage->event_id = $request->event;

            if ($request->hasFile('image')) {
                $allowedfileExtensions = ['pdf', 'jpg', 'png', 'docx', 'jpeg', 'gif', 'svg'];
                $newImage = $request->file('image');

                $extension = $newImage->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtensions);

                if ($check) {
                    $old_photo = $upcomingEventImage->event_image;

                    $file_name = Str::random(4) . '.' . $extension;
                    $newImage->move(public_path('images'), $file_name);
                    if ($old_photo) {
                        unlink(public_path('images/') . $old_photo);
                        $upcomingEventImage->event_image = $file_name;
                    } else {
                        $upcomingEventImage->event_image = $upcomingEventImage->event_image;
                    }

                } else {
                    return redirect()->back()->with('error', 'File type not supported');
                }

            }

            $upcomingEventImage->save();

            flash()->addSuccess('Featured Upcoming Event image updated Successfully!😃');
            return redirect('/manage');
        } catch (\Exception $e) {
            report($e);
            report($e->getMessage());

            flash()->addError('Featured Upcoming Event image was not updated!😞');
            return redirect('/manage');
        } catch (\Throwable $e) {
            report($e->getMessage());
            return back()->withError($e->getMessage())->withInput();
        }
    }

    public function create_video_slider()
    {
        return view('admin.add-video-slider');
    }

    public function update_video_slider(Request $request)
    {
        dd($request);
    }

    /**
     * Admin Dashboard
     *
     * Retrieves data for the admin dashboard and returns the corresponding view.
     *
     * @var \App\Models\User $authUser The currently authenticated user.
     * @var int $eventCount The number of events.
     * @var int $courses The number of courses.
     * @var int $users The number of users.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function admin_dashboard()
    {
        $authUser   = $this->user();
        $eventCount = Event::count();
        $courses    = Course::count();
        $users      = User::count();
        $licenses   = Licenses::count();
        $webinars   = Web::count();
        $boys       = User::where('gender_id', 1)->count();
        $girls      = User::where('gender_id', 2)->count();

        return view('admin.dashboard', compact('authUser', 'eventCount', 'courses', 'users', 'licenses', 'boys', 'girls', 'webinars'));
    }

    public function manage_event()
    {
        $events = Event::orderBy('id', 'desc')->paginate(5);
        return view('admin.manage', compact('events'));
    }

    public function event()
    {
        $eventType = EventType::all();
        return view('admin.event', compact('eventType'));
    }

    public function store_event(AddEventRequest $request)
    {
        $responded = Route::dispatch(Request::create('api/admin/add-event', 'POST', $request->all()));
        if ($responded->status() == 200) {
            flash()->addSuccess('Event Created Successfully!😃');
            return redirect('/manage');
        }
        return redirect()->back()->with('error', 'Event Creation Failed. Please check Image dimension and try again. 😞');
    }

    public function edit_event(int $event)
    {
        $event = Event::findOrFail($event);
        $eventTypes = EventType::select(['id', 'name'])->get();
        return view('admin.edit-event', compact('event', 'eventTypes'));
    }


    public function update_event(UpdateEventRequest $request, int $event)
    {
        $responded = Route::dispatch(Request::create("api/admin/change-event/$event", 'POST', $request->all()));
        if ($responded->status() == 200) {
            flash()->addSuccess('Event Updated Successfully!😃');
            return redirect('/admin/manage');
        }
        return redirect()->back()->with('error', 'Event Updation Failed 😞');
    }

    public function delete_event(int $event)
    {
        $responded = Route::dispatch(Request::create("api/admin/deleteEvent/$event", 'GET'));
        if ($responded->status() == 200) {
            flash()->addSuccess('Event deleted Successfully!😃');
            return redirect('/manage');
        }
        return redirect()->back()->with('error', 'Event deletion Failed 😞');
    }

    public function feature_event(int $id)
    {
        try {
            $event = Event::findOrFail($id);

            if ($event->is_featured == 0) {
                $event::where('id', $id)->update(['is_featured' => 1]);
            }

            if ($event->is_featured == 1) {
                $event::where('id', $id)->update(['is_featured' => 0]);
            }

            flash()->addSuccess('Event status changed Successfully!😃');
            return redirect('/manage');

        } catch (\Exception $e) {
            report($e);
            report($e->getMessage());
        } catch (\Throwable $e) {
            report($e->getMessage());
            return back()->withError($e->getMessage())->withInput();
        }
        return redirect()->back()->with('error', 'Event status change has Failed 😞');

    }

    public function upcome_event(int $id)
    {
        try {
            $event = Event::findOrFail($id);

            if ($event->is_upcoming == 0) {
                $event::where('id', $id)->update(['is_upcoming' => 1]);
            }

            if ($event->is_upcoming == 1) {
                $event::where('id', $id)->update(['is_upcoming' => 0]);
            }

            flash()->addSuccess('Event upcoming status changed Successfully!😃');
            return redirect('/manage');

        } catch (\Exception $e) {
            report($e);
            report($e->getMessage());
        } catch (\Throwable $e) {
            report($e->getMessage());
            return back()->withError($e->getMessage())->withInput();
        }
        return redirect()->back()->with('error', 'Event status change has Failed 😞');

    }

    public function postpone_event(int $id)
    {
        $event = Event::findOrFail($id);
        return view('admin.postpone-event', compact('event'));
    }

    public function postpone(Request $request, int $id)
    {
        $responded = Route::dispatch(Request::create("api/admin/postpone-an-event/$id", 'POST', $request->all()));
        if ($responded->status() == 200) {
            flash()->addSuccess('Event postponed Successfully!😃');
            return redirect('/admin/manage');
        }
        return redirect()->back()->with('error', 'We couldn\'t postpone this Event 😞');
    }

    public function industry()
    {
        return view('admin.industry');
    }

    public function store_industry(AddIndustryRequest $request)
    {
        $request->slug = strtolower(preg_replace('/-+/', '-', $request->slug));
        $data = [
            'industry' => $request->industry,
            'slug' => $request->slug,
        ];
        $responded = Route::dispatch(Request::create('api/admin/add-industry', 'POST', $data));
        if ($responded->status() == 200) {
            flash()->addSuccess('Industry Created Successfully!😃');
            return redirect('/admin/dashboard');
        }
        return redirect()->back()->with('error', 'Industry Creation Failed 😞');
    }

    public function manage_industry()
    {
        $industries = Industries::orderBy('id', 'desc')->paginate(5);
        return view('admin.manage-industry', compact('industries'));
    }

    public function edit_industry(int $id)
    {
        $industry = Industries::where('id', $id)->get()[0];
        return view('admin.edit-industry', compact('industry'));
    }

    public function update_industry(Request $request, int $id)
    {
        try {
            DB::beginTransaction();

            $industry = Industries::findOrFail($id);
            $industry->name = $request->industry;
            $industry->slug = $request->slug;
            $industry->save();
            DB::commit();
            return redirect('admin/manage-industry')->with("success", " Industry updated successfully.");
        } catch (\Exception $e) {
            report($e);
            report($e->getMessage());
            DB::rollback();

            return redirect('admin/manage-industry')->with('error', 'We could not update that Industry. Please contact the service personnel')->withInput();
        } catch (\Throwable $e) {
            report($e->getMessage());
            return back()->withError($e->getMessage());
        }
    }

    public function delete_industry($industry)
    {
        dd($industry);
    }

    public function manage_course(Request $request)
    {
        $search = $request->search;
        if ($request->has('search')) {
            $courses = Course::where('name', $search)
                ->orWhereHas('courseCategory', function ($categoryQuery) use ($search) {
                    $categoryQuery->where('title', 'LIKE', '%' . $search . '%');
                })
                ->orWhereHas('courseType', function ($authorQuery) use ($search) {
                    $authorQuery->where('name', 'LIKE', '%' . $search . '%');
                })->orderBy('id')->paginate(5);
        } else {
            $courses = Course::orderBy('id', 'desc')->paginate(5);
        }
        return view('admin.manage-course', compact('courses'));
    }

    public function course()
    {
        $courseType = CourseType::all();
        $certificates = Certificates::all();
        $categories = CourseCategories::all();
        return view('admin.course', compact('courseType', 'certificates', 'categories'));
    }

    public function add_course(AddCourseRequest $request)
    {
        $responded = Route::dispatch(Request::create('api/course/store-course', 'POST', $request->all()));
        $statusCode = $responded->status();

        // if ($responded->status() == 200 ) {
        //     flash()->addSuccess('Course Created Successfully!😃');
        //     return redirect('/manage-course');
        // }
        // return redirect()->back()->with('error', 'Course Creation Failed 😞');

        if ($statusCode == 200) {
            flash()->addSuccess('Course Created Successfully!😃');
            return redirect('/manage-course');
        } elseif ($statusCode == 422) {
            return redirect()->back()->withErrors($responded->getContent())->withInput();
        } else {
            return redirect()->back()->with('error', 'Course Creation Failed 😞')->setStatusCode($statusCode);
        }
    }

    public function edit_course(int $id)
    {
        $course = Course::findOrFail($id);
        $courseTypes = CourseType::all();
        $certificates = Certificates::all();
        $categories = CourseCategories::all();
        $paymentType = Price::all();

        return view('admin.edit-course', compact('course', 'courseTypes', 'certificates', 'categories', 'paymentType'));
    }

    public function update_course(Request $request, int $id)
    {
        $responded = Route::dispatch(Request::create("api/course/modify-course/$id", 'POST', $request->all()));
        if ($responded->status() == 200) {
            flash()->addSuccess('Course updated Successfully!😃');
            return redirect('/manage-course');
        }
        return redirect()->back()->with('error', 'Course updation Failed 😞');
    }

    public function feature_course(int $id)
    {
        $responded = Route::dispatch(Request::create("api/course/feature-course/$id", 'GET'));
        if ($responded->status() == 200) {
            flash()->addSuccess('Course status updated Successfully!😃');
            return redirect('/featured-courses');
        }
        return redirect()->back()->with('error', 'Course status updation Failed 😞');

    }

    public function analyse_event(int $id)
    {
        $event = Event::findOrFail($id);
        return view('admin.event-analytics');
    }

    public function manage_mail()
    {
    }

    public function mail()
    {
        $user_types = UserTypes::all();
        $courses = Course::all();
        return view('admin.mail', compact('user_types', 'courses'));
    }

    public function course_categories()
    {
        $categories = CourseCategories::orderBy('id', 'desc')->paginate(5);
        return view('admin.course-categories', compact('categories'));
    }
    public function add_category()
    {
        return view('admin.add-category');
    }
    public function add_course_category(CourseCategoryRequest $request)
    {
        $responded = Route::dispatch(Request::create('api/courseCategory/store-course-category', 'POST', $request->all()));

        if ($responded->status() == 200) {
            flash()->addSuccess('Course Category Created Successfully!😃');
            return redirect('/course-categories');
        }
        return redirect()->back()->with('error', 'Course Category Creation Failed 😞');

    }
    public function edit_course_category(int $category)
    {
        $category = CourseCategories::findOrFail($category);
        return view('admin.edit-category', compact('category'));
    }
    public function update_course_category(Request $request, int $category)
    {
        $responded = Route::dispatch(Request::create("api/courseCategory/modify-course-category/$category", 'POST', $request->all()));
        if ($responded->status() == 200) {
            flash()->addSuccess('Course category updated Successfully!😃');
            return redirect('/course-categories');
        }
        return redirect()->back()->with('error', 'Course category updation Failed 😞');
    }

    public function posts()
    {
        $posts = Post::withCount(['comments', 'likes'])->orderBy('id', 'desc')->paginate(5);
        return view('admin.posts', compact('posts'));
    }

    /**
     * Post Comments
     *
     * Retrieves the comments under a post
     * @param int $id
     * @var int $post Post with its comments.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function post_comment(int $id)
    {
        $post = Post::with('comments')->findOrFail($id);
        // dd($post);
        return view('admin.post_comments', compact('post', 'id'));
    }

    public function delete_post($post)
    {
        $responded = Route::dispatch(Request::create("api/admin/deletePost/$post", 'GET'));
        if ($responded->status() == 200) {
            flash()->addSuccess('Post deleted Successfully!😃');
            return redirect('/posts');
        }
        return redirect()->back()->with('error', 'Post deletion Failed 😞');
    }

    public function users()
    {
        $users = User::orderBy('id', 'desc')->paginate(5);
        return view('admin.users', compact('users'));
    }


    public function news()
    {
        $news = News::orderBy('id', 'desc')->paginate(5);
        return view('admin.news', compact('news'));
    }


    public function to_add_news()
    {
        $roles = Roles::all();
        return view('admin.add-news', compact('roles'));
    }


    public function add_news(NewsRequest $request)
    {
        $responded = Route::dispatch(Request::create("api/news/addNews", 'POST'));
        if ($responded->status() == 200) {
            flash()->addSuccess('news added Successfully!😃');
            return redirect('/manage-news');
        }
        return redirect()->back()->with('error', 'Baba, dat news fit be fake O. d tin no go 😞');
    }

    public function manage_webinar()
    {
        $webinars = web::orderBy('id', 'desc')->paginate(10);
        return view('admin.manage-webinar', compact('webinars'));
    }

    public function add_webinar()
    {
        return view('admin.add-webinar');
    }

    public function webinar_recordings(webRequest $request)
    {
        $responded = Route::dispatch(Request::create("api/webinarRecs/add-recording", 'POST'));
        if ($responded->status() == 200) {
            flash()->addSuccess('Webinar Recordings added Successfully!😃');
            return redirect('/manage-webinar');
        }
        return redirect()->back()->with('error', 'Baba,wu no fit add dat recording O. Call persin mek e epp u. 😞');
    }

    public function opportunities()
    {
        $opportunities = OpportunityZone::orderBy('id', 'desc')->paginate(5);
        return view('admin.opportunities', compact('opportunities'));
    }

    public function add_opportunity()
    {
        return view('admin.add-opportunity');
    }

    public function store_opportunity(OpportunityRequest $request)
    {
        $responded = Route::dispatch(Request::create("api/opportunity/addOpportunity", 'POST'));
        if ($responded->status() == 200) {
            flash()->addSuccess('Opportunity added Successfully!😃');
            return redirect('/opportunities');
        }
        return redirect()->back()->withInput()->with('error', 'Couldn\'t add that opportunity! 😞');

    }


    public function licenses()
    {
        $licenses = Licenses::orderBy('id', 'desc')->paginate();
        return view('admin.licenses', compact('licenses'));
    }

    public function add_users()
    {
        return view('admin.add-users');
    }

    public function download_bulk_upload_template(){
        $filePath = storage_path('app/users.xlsx');
        return response()->download($filePath, 'Users.xlsx');
    }

    public function store_users(Request $request)
    {
        try {
            $this->validate($request, ['users' => 'required|mimes:xls,xlsx, xlsm']);
            Excel::import(new UsersImport, $request->file('users'));

            flash()->addSuccess('Bulk upload Successful!😃');
            return redirect('/users');
        } catch (\Exception $e) {
            report($e);
            report($e->getMessage());
            flash()->addError('Something went wrong. Bulk upload failed!');
            return redirect('/add-users');
        }
    }

    public function edit_user($id){
        $user       = User::findOrFail($id);
        $genders    = Genders::all();
        $industries = Industries::all();
        $states     = State::all();
        $lgas       = Lga::all();
        return view('admin.edit-user', compact('user', 'genders','industries','id','states','lgas'));
    }

    public function update_user(Request $request, int $id){
        try {
            $user = User::findOrFail($id); 
            $user->first_name = $request->first_name;
            $user->last_name  = $request->last_name;
            $user->phone      = $request->phone;
            $user->email      = $request->email;

            $user->password          = $request->password ? $request->password : Hash::make("admin");
            $user->dob               = $request->dob ? date('Y-m-d', strtotime($request->dob)) : null;
            $user->gender_id         = $request->gender_id ? $request->gender_id : "";

            $user->have_business     = $request->have_business ? $request->have_business[0] : null;
            $user->have_access_bank_account  = $request->have_access_bank_account ? $request->have_access_bank_account[0] : null;
            $user->account_status    = $request->account_status ? $request->account_status[0] : null;
            $user->account_type      = $request->account_type ? $request->account_type[0] : null;

            $user->industry_id       = $request->industry_id ? $request->industry_id : "";
            $user->years_in_business = $request->years_in_business ? $request->years_in_business : "";
            $user->account           = $request->account ? $request->account : "";
            $user->address           = $request->address ? $request->address : "";
            $user->state_id          = $request->state_id;
            $user->lga_id            = $request->lga_id;
            $user->role_id           = $request->role_id;
        
            $user->save();

            flash()->addSuccess('User updated Successfully!😃');
            return redirect('/users');
        } catch (\Exception $e) {
            report($e);
            report($e->getMessage());
            flash()->addError('Something went wrong. We could not update that user!');
            return redirect('/users');
        }
    }

    public function delete_user($id){
        try{
            User::findOrFail($id)->delete();
            flash()->addSuccess('User suspended Successfully!😃');
            return redirect('/users');

        } catch (\Exception $e) {
            report($e);
            report($e->getMessage());
            flash()->addError('Something went wrong. We couldn\'t suspend the user!');
            return redirect('/users');
        }
    }
    public function manage_digest()
    {
        $digests = RadioDigest::orderBy('id', 'desc')->paginate(10);
        return view('admin.manage-digest', compact('digests'));
    }

    public function add_digest()
    {
        return view('admin.add-digest');
    }

    public function store_digest(DigestRequest $request)
    {
        $responded = Route::dispatch(Request::create("api/digests/save-digest", 'POST'));
        if ($responded->status() == 200) {
            flash()->addSuccess('Radio Digest added Successfully!😃');
            return redirect('/manage-digest');
        }
        return redirect()->back()->with('error', 'Baba,wu no fit add dat digest O. Call persin mek e epp u. 😞');
    }


}