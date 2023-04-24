@push('styles')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f4f7f6;
            margin-top: 20px;
        }

        .card {
            background: #fff;
            transition: .5s;
            border: 0;
            margin-bottom: 30px;
            border-radius: .55rem;
            position: relative;
            width: 100%;
            box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
        }

        .chat-app .people-list {
            width: 280px;
            position: absolute;
            left: 0;
            top: 0;
            padding: 20px;
            z-index: 7
        }

        .chat-app .chat {
            margin-left: 280px;
            border-left: 1px solid #eaeaea
        }

        .people-list {
            -moz-transition: .5s;
            -o-transition: .5s;
            -webkit-transition: .5s;
            transition: .5s
        }

        .people-list .chat-list li {
            padding: 10px 15px;
            list-style: none;
            border-radius: 3px
        }

        .people-list .chat-list li:hover {
            background: #efefef;
            cursor: pointer
        }

        .people-list .chat-list li.active {
            background: #efefef
        }

        .people-list .chat-list li .name {
            font-size: 15px
        }

        .people-list .chat-list img {
            width: 45px;
            border-radius: 50%
        }

        .people-list img {
            float: left;
            border-radius: 50%
        }

        .people-list .about {
            float: left;
            padding-left: 8px
        }

        .people-list .status {
            color: #999;
            font-size: 13px
        }

        .chat .chat-header {
            padding: 15px 20px;
            border-bottom: 2px solid #f4f7f6
        }

        .chat .chat-header img {
            float: left;
            border-radius: 40px;
            width: 40px
        }

        .chat .chat-header .chat-about {
            float: left;
            padding-left: 10px
        }

        .chat .chat-history {
            padding: 20px;
            border-bottom: 2px solid #fff;
            height: 400px;
            overflow-y: auto;
        }

        .chat .chat-history ul {
            padding: 0
        }

        .chat .chat-history ul li {
            list-style: none;
            margin-bottom: 30px
        }

        .chat .chat-history ul li:last-child {
            margin-bottom: 0px
        }

        .chat .chat-history .message-data {
            margin-bottom: 15px
        }

        .chat .chat-history .message-data img {
            border-radius: 40px;
            width: 40px
        }

        .chat .chat-history .message-data-time {
            color: #434651;
            padding-left: 6px
        }

        .chat .chat-history .message {
            color: #444;
            padding: 18px 20px;
            line-height: 26px;
            font-size: 16px;
            border-radius: 7px;
            display: inline-block;
            position: relative
        }

        .chat .chat-history .message:after {
            bottom: 100%;
            left: 7%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-bottom-color: #fff;
            border-width: 10px;
            margin-left: -10px
        }

        .chat .chat-history .my-message {
            background: #efefef
        }

        .chat .chat-history .my-message:after {
            bottom: 100%;
            left: 30px;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-bottom-color: #efefef;
            border-width: 10px;
            margin-left: -10px
        }

        .chat .chat-history .sender {
            background: #94e9fc;
            text-align: right;
            border-radius: 50px 0px 50px 50px;
        }
        .chat .chat-history .receiver {
            background: #d4d3d3;
            text-align: left;
            border-radius: 0px 50px 50px 50px;
        }

        

        .chat .chat-message {
            padding: 20px
        }

        .online,
        .offline,
        .me {
            margin-right: 2px;
            font-size: 8px;
            vertical-align: middle
        }

        .online {
            color: #86c541
        }

        .offline {
            color: #e47297
        }

        .me {
            color: #1d8ecd
        }

        .float-right {
            float: right
        }

        .clearfix:after {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0
        }

        @media only screen and (max-width: 767px) {
            .chat-app .people-list {
                height: 465px;
                width: 100%;
                overflow-x: auto;
                background: #fff;
                left: -400px;
                display: none
            }

            .chat-app .people-list.open {
                left: 0
            }

            .chat-app .chat {
                margin: 0
            }

            .chat-app .chat .chat-header {
                border-radius: 0.55rem 0.55rem 0 0
            }

            .chat-app .chat-history {
                height: 300px;
                overflow-x: auto
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 992px) {
            .chat-app .chat-list {
                height: 650px;
                overflow-x: auto
            }

            .chat-app .chat-history {
                height: 600px;
                overflow-x: auto
            }
        }

        @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1) {
            .chat-app .chat-list {
                height: 480px;
                overflow-x: auto
            }

            .chat-app .chat-history {
                height: calc(100vh - 350px);
                overflow-x: auto
            }
        }
    </style>
@endpush
<div>
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="list-group">

                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ $request->subject }}</h5>
                                <small class="text-muted">{{ $request->created_at->diffForHumans() }}</small>
                            </div>
                            <p class="mb-1">{{ $request->description }}</p>
                            
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                @if ($request->status == 'in progress' || $request->status == 'solved')
                    <div class="card ">
                        <div class="chat">
                            <div class="chat-header clearfix">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                            <img
                                                src="https://ui-avatars.com/api/?name={{ $request->student->name }}"alt="avatar">
                                        </a>
                                        <div class="chat-about">
                                            <h6 class="m-b-0">{{ $request->student->name }}</h6>
                                            <small>{{ $request->student->registration_no }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="chat-history" id="chat">
                                <ul class="m-b-0">

                                    @if ($messages)
                                        @foreach ($messages as $message)
                                            @if ($message->user_id == Auth::user()->id)
                                                <li class=" justify-content-end">

                                                    <div class="d-flex justify-content-end">
                                                        <div class="message other-message  sender">
                                                            {{ $message->message }}

                                                        </div>

                                                    </div>
                                                    <div class="message-data ">
                                                        <span
                                                            class="message-data-time">{{ $message->created_at->diffForHumans() }}</span>
                                                    </div>
                                                </li>
                                            @else
                                                <li class="">
                                                    <div class="d-flex justify-content-start">
                                                        <div class="message other-message receiver">
                                                            {{ $message->message }}

                                                        </div>

                                                    </div>
                                                    <div class="message-data ">
                                                        <span
                                                            class="message-data-time">{{ $message->created_at->diffForHumans() }}</span>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach
                                    @endif


                                </ul>
                            </div>

                            <div class="chat-message clearfix">
                                <div class="input-group mb-0">

                                    @if ($request->status == 'in progress')
                                        <input type="text" wire:model='message' class="form-control"
                                            placeholder="Enter text here...">
                                        <button type="button" wire:click.prevent='send' onclick="reloadPage()"
                                            class="btn btn-success">Reply</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif($request->status == 'pending')
                    <div class="card">
                        <div class="card-body">
                            Your issue has not yet been assigned to any support agent. Please be patient.
                        </div>
                    </div>
                @endif

                @if ($request->status == 'solved')
                    <p>This issue has been solved hence you cannot reply to messages anymore</p>
                @endif
            </div>
            <!-- Order Statistics -->
            <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">{{ $request->student->name }}</h5>
                            <small class="text-muted">Submitted this request</small>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">

                        </div>
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="bx bx-edit-alt"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Registration </h6>
                                        <small class="text-muted">{{ $request->student->registration_no }}</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-success"><i
                                            class="bx bx-buildings"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Faculty</h6>
                                        <small
                                            class="text-muted">{{ $request->student->departments->faculties->name }}</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-info"><i
                                            class="bx bx-home-alt"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Department</h6>
                                        <small class="text-muted">{{ $request->student->departments->name }}</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-warning"><i
                                            class="bx bx-dots-horizontal-rounded"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Status</h6>
                                        <small class="text-muted">
                                            @if ($request->status == 'pending')
                                                <span
                                                    class="badge rounded-pill bg-danger">{{ $request->status }}</span>
                                            @elseif($request->status == 'in progress')
                                                <span
                                                    class="badge rounded-pill bg-warning">{{ $request->status }}</span>
                                            @elseif($request->status == 'solved')
                                                <span
                                                    class="badge rounded-pill bg-success">{{ $request->status }}</span>
                                            @endif
                                        </small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-danger"><i
                                            class="bx bx-alarm-exclamation"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Priority</h6>
                                        <small class="text-muted">
                                            @if ($request->priority == 'urgent')
                                                <span
                                                    class="badge rounded-pill bg-danger">{{ $request->priority }}</span>
                                            @elseif($request->priority == 'high')
                                                <span
                                                    class="badge rounded-pill bg-warning">{{ $request->priority }}</span>
                                            @endif
                                        </small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="bx bx-user "></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Assigned to:</h6>
                                        <small
                                            class="text-muted">{{ $request->assignedTo ? $request->assignedTo->name : '-----' }}</small>
                                    </div>
                                </div>
                            </li>


                            @if ($request->images)
    @php
        $images = explode(',', $request->images);
    @endphp

    <div class="col-lg-12 mb-4 pb-1">
        <small class="text-light fw-semibold">Attachments</small>
        <div class="demo-inline-spacing mt-3">
            @foreach ($images as $key => $image)
                @if ($image)
                    <ul class="list-group">
                        <li class="list-group-item d-flex align-items-center">
                            <a href="#" class="list-group-item d-flex align-items-center"
                                data-bs-toggle="modal" data-bs-target="#attachmentModal{{ $key }}">
                                <i class="bx bx-paperclip me-2"></i> {{ $image }}
                            </a>
                        </li>
                    </ul>

                    <div class="modal fade" id="attachmentModal{{ $key }}" tabindex="-1" aria-hidden="true" wire:ignore.self>
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel1">Attachment Preview</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <img src="{{ asset('images/'.$image) }}" alt="{{ $image }}" style="max-width: 100%; max-height: 100%;">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endif


                            @if (Auth::user()->hasRole('Support Agent'))
                                @if ($request->status == 'in progress')
                                    <div class="col-lg-12 ">
                                        <button type="button" wire:click.prevent='closeRequest'
                                            class="btn btn-success">Close issue as solved</button>
                                    </div>
                                @endif

                            @endif

                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Order Statistics -->
        </div>

        <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog" role="document">
                <form action="">
                    <div class="modal-content">
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>

@push('scripts')
    <script>
        let container = document.querySelector('#chat');

        window.addEventListener('DOMContentLoaded', () => {
            scrollDown();
        });

        window.addEventListener('scrollDown', () => {
            Livewire.hook('message.processed', () => {
                console.log('scroll down');
                if (container.scrollTop + container.clientHeight + 100 < container.scrollHeight) {
                    return
                }

                scrollDown();
            })
        });
        

        
    </script>
@endpush
