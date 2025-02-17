    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- End JavaScript -->


    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('/public/frontend/style.css') }}?id=1">
    <!-- End CSS -->

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .bottom {
            display: flex;
            align-items: center;
            padding: 15px;
            background-color: #f4f4f4;
        }

        form {
            flex: 1;
            display: flex;
            align-items: center;
        }

        input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        button {
            background-color: #3f51b5;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }



    </style>

    <style>
        .typing-indicator {
            display: flex;
            align-items: center;
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #555;
            padding: 10px;
            background-color: #f5f5f5;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 250px;
        }

        .typing-indicator .avatar {
            width: 20px;
            height: 20px;
            margin-right: 10px;
            border-radius: 50%;
            object-fit: cover;
        }

        .typing-indicator .dots {
            display: inline-block;
        }

        .typing-indicator .dots::after {
            content: '...';
            animation: typing-dots 1.2s infinite steps(3, start);
        }

        @keyframes typing-dots {
            0% {
                content: '';
            }
            33% {
                content: '.';
            }
            66% {
                content: '..';
            }
            100% {
                content: '...';
            }
        }

    </style>

    <style>
        .info-data {
            font-size: 10px;
            color: #777; /* Optional: You can use a light gray color for better readability */
            display: block; /* Ensures it appears on a new line */
            margin-top: 5px; /* Adds a little space between the message and the info */
        }

    </style>
    <audio id="audio_success" autostart="false">
        <source src="{{asset('public/success_sound.mp3')}}" type="audio/ogg">
        <source src="{{asset('public/success_sound.mp3')}}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <div class="chat">
        <div class="row">
            <div class="col-md-2" style="border: groove;display: {{ ($user_id != 0) ? 'block' : 'none' }}" id="show_history">
                <strong><u>History</u></strong>
                <ul>

                </ul>
            </div>
            <div class="col-md-10" style="border: groove" id="chat_box">
                <input type="text" onkeyup="get_history(null,this.value)" name="keyword" id="keyword" style="float: right;display: none;border-radius: 10px" placeholder="Search Chat">
                <!-- Header -->
                <div class="top">
                    <img src="{{ asset('public/favicon.webp') }}"  alt="Avatar" style="width: 80px;height: 80px;">
                    <div>
                        <p>{{ strtoupper('Shipa1 Support') }}</p>
                        <small>Online</small>
                    </div>
                </div>

                <div class="messages">
                    <div class="left message">
                        <img src="{{ asset('public/favicon.webp') }}" alt="Avatar" style="width: 40px;height: 40px">
                        <p>Thank you for considering Shipa1  Transport. We have agents standing by to assist you at 1 (844) 474-4721 or here on Livechat.

                            How can we help you today?</p>
                    </div>
                </div>
                <!-- End Header -->

                <!-- Chat -->

                <!-- End Chat -->

                <!-- Typing Indicator -->
                <div id="typingIndicator" class="typing-indicator" style="display: none;">
{{--                    <img src="{{ asset('public/favicon.webp') }}" alt="Avatar" class="avatar">--}}
                    <p>Sending <span class="dots">...</span></p>
                </div>

                <!-- Footer -->
                <div class="bottom">
                    <form style="padding: 10px;" id="form_submit_chat">
                        <input type="text" id="message" name="message" placeholder="Enter message..." autocomplete="off">
                        <a id="emoji-btn" href="#" style="margin-left: 5px;font-size: 30px">😊</a>
                        <div id="emoji-popup" style="display: none; position: absolute; border: 1px solid #ccc; background: #f9f9f9; padding: 10px; border-radius: 5px; max-width: 450px; flex-wrap: wrap;margin-top:-300px">
                            <!-- Emoji list goes here -->
                        </div>
                        <button type="submit"></button>
                    </form>
                </div>

                <!-- End Footer -->

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            // Sample emoji list (50 emojis)
            const emojis = ['😀', '😃', '😄', '😁', '😆', '😅', '😂', '🤣', '😊', '😇',
                '🙂', '🙃', '😉', '😌', '😍', '🥰', '😘', '😗', '😙', '😚',
                '😋', '😛', '😜', '🤪', '😝', '🤑', '🤗', '🤭', '🤫', '🤔',
                '🤐', '😷', '🤒', '🤕', '🤢', '🤮', '😵', '🤯', '😎', '🤓',
                '🧐', '😕', '😟', '🙁', '😮', '😯', '😲', '🥺', '😭', '😱'];

            // Append emojis to the popup
            emojis.forEach(function (emoji) {
                $('#emoji-popup').append(`<span class="emoji" style="cursor: pointer; font-size: 24px; margin: 5px;">${emoji}</span>`);
            });

            // Show/hide emoji popup when emoji button is clicked
            $('#emoji-btn').on('click', function (e) {
                e.stopPropagation(); // Prevent event propagation to body
                $('#emoji-popup').toggle();
            });

            // Insert emoji into the message input field when clicked
            $(document).on('click', '.emoji', function () {
                const emoji = $(this).text();
                $('#message').val($('#message').val() + emoji);
                $('#emoji-popup').hide();
                $('#message').focus();
            });

            // Hide the emoji popup when clicking outside
            $(document).on('click', function () {
                $('#emoji-popup').hide();
            });
        });

    </script>
    <script>
        var date_created = "{{ date('Y-m-d') }}";
        var ip_address = "{{ $deviceId }}";
        var user_id = {{ $user_id }};
        var c_thread_id = null;
        var admin = {{ ($admin) ? '1' : '0' }};
        @if($admin)
         $('#form_submit_chat').hide();
         @else
         get_history(date_created,ip_address);
        @endif
        show_his();
        var ring = 0;
        var set_interval2;
        function show_his() {
            $('#show_history ul').html('');
            $.ajax({
                url: "{{ url('show_history') }}",
                method: 'GET',
                data: { date_created }
            }).done(function (res) {
                if (res) {
                    var lis = "";
                    var ring = 0; // Initialize ring flag

                    $.each(res, function (index, value) {
                        lis += `<li>
                    <button type="button" onclick="get_history('${value.date_created}', '${value.ip_address}', 'admin', '${value.thread_id}')"
                    class="btn btn-outline-info btn-sm">
                        Thread: ${value.thread_id}
                        ${(value.replied == 0) ? '<span class="badge badge-danger badge-sm">(New)</span>' : ''}
                    </button>
                </li>`;

                        if (value.replied == 0 && admin == 1 && !$('#chat_box').is(':visible')) {
                            ring = 1;
                        }
                        if (value.replied == 1 && admin == 0 && !$('#chat_box').is(':visible')) {
                            ring = 1;
                        }
                    });

                    if (ring == 1) {
                        playNotificationSound();
                    }

                    if (set_interval2) {
                        clearInterval(set_interval2);
                    }
                    set_interval2 = setInterval(function() {
                        show_his();
                    }, 20000);

                    $('#show_history ul').append(lis);
                }
            });
        }

        // Function to play notification sound
        function playNotificationSound() {
            var sound = document.getElementById("audio_success");
            sound.play();
        }


        var set_interval;
        function get_history(date_created = null,ip_address = null,admin = null,thread_id = null){
            c_thread_id = thread_id;
            if (set_interval) {
                clearInterval(set_interval);
            }
            if(admin){
                $('#form_submit_chat').show();
            }
            set_interval = setInterval(function() {
                get_history(date_created, ip_address, admin, thread_id);
            }, 10000);
            $.ajax({
                url: "{{ url('chat_history') }}",
                method: 'GET',
                data: {date_created,ip_address,thread_id :c_thread_id}
            }).done(function (res) {
                if(res.status == 1) {

                    $('.messages').remove();
                    $('.top').after(`
                        <div class="messages">
                            <div class="left message">
                            <img src="{{ asset('public/favicon.webp') }}" alt="Avatar" style="width: 40px;height: 40px">
                            <p>Thank you for considering Shipa1  Transport. We have agents standing by to assist you at 1 (844) 474-4721 or here on Livechat.How can we help you today?</p>
                            </div>
                        </div>
                        `);
                    if(res.data.length > 0) {
                        $.each(res.data, function (index, value) {
                            if (value.receive_message) {
                                make_response(value,1);
                            } else {
                                make_response(value,0);
                            }
                        })
                    }
                }
            });
        }

        function make_response(send_value, res) {
            var info = '';
            $("#typingIndicator").hide();

            if (res == 0) {
                var final = send_value.send_message;
                if (admin == 1 && send_value.info_data) {
                    info = '<span class="info-data">' + send_value.info_data + '</span>';
                }
                $(".messages > .message").last().after(
                    '<div class="right message">' +
                    '<img src="{{ asset("public/user.png") }}" alt="Avatar" style="width: 50px;height: 50px">' +
                    '<p>' + final + '</p>' +
                    info + // Display info below the message
                    '</div>'
                );
            } else {
                var final = send_value.receive_message;
                if (admin == 1 && send_value.info_data) {
                    info = '<span class="info-data">' + send_value.info_data + '</span>';
                }
                $(".messages > .message").last().after(
                    '<div class="left message">' +
                    '<img src="{{ asset("public/favicon.webp") }}" alt="Avatar" style="width: 40px;height: 40px">' +
                    '<p>' + final + '</p>' +
                    info + // Display info below the message
                    '</div>'
                );
            }

            var messagesContainer = $(".messages");
            messagesContainer.scrollTop(messagesContainer.prop("scrollHeight"));
            $(document).scrollTop($(document).height());
        }

        //Broadcast messages

        $("form").submit(function (event) {
            event.preventDefault();

            //Stop empty messages
            if ($("form #message").val().trim() === '') {
                return;
            }

            //Disable form
            $("form #message").prop('disabled', true);
            $("form button").prop('disabled', true);
            $("form #responseType").prop('disabled', true);

            $("#typingIndicator").show();

            $.ajax({
                url: "{{ url('chat') }}",
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': "{{csrf_token()}}"
                },
                data: {
                    "model": "gpt-3.5-turbo",
                    "content": $("form #message").val(),
                    "personality": $("form #responseType").val(),
                    "ip_address": ip_address,
                    "user_id": user_id,
                    "thread_id": c_thread_id,
                    "reference_domain": "{{$domain}}",
                    "admin": '{{ ($admin) ? '1' : 0 }}',
                }
            }).done(function (res) {
                var send_value = $("form #message").val();
                @if($admin)
                  get_history(res.data.date_created,res.data.ip_address,'admin',res.data.thread_id)
                @else
                 get_history(res.data.date_created,res.data.ip_address,null,res.data.thread_id)
                @endif

                $("form #message").val('');
                $(document).scrollTop($(document).height());

                $("form #message").prop('disabled', false);
                $("form button").prop('disabled', false);
            });
        });

    </script>

