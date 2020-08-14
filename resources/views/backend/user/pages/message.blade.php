@extends('backend.user.layouts.master')

@section('title')
  PANTHA APP | Dashboard
@endsection

@section('description')

@endsection

@section('keywords')

@endsection

@section('extrastyle')

<style>

</style>
@endsection

@section('content')
<!-- content start -->

<div class="content msg">
  <main class="cont">
    <div class="container-fluid m-auto">
      <div class="row">
        <aside
          class="col-md-10 col-lg-4 my-3 text-center msg-side bg p-4"
        >
          <div class="allMsg-top d-flex">
            <span> All Messages</span>
            <i class="fa fa-plus-square"></i>
          </div>
          <div class="all-msg-box">
            <!-- search input -->
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"
                  ><i class="fa fa-search"></i
                ></span>
              </div>
              <input
                type="text"
                class="form-control"
                placeholder="Search users"
                aria-label="Username"
                aria-describedby="basic-addon1"
              />
            </div>
            <div class="msg-box bg d-flex">
              <div class="user">
                <img src="{{asset('assets/img/profile-pic.svg')}}" alt="" />
                <div class="txt">
                  <h4>John Doe</h4>
                  <span>UI UX Designer</span>
                </div>
              </div>
              <div class="status">
                <small>Online</small>
              </div>
            </div>
            <div class="msg-box bg d-flex">
              <div class="user">
                <img src="{{asset('assets/img/profile-pic.svg')}}" alt="" />
                <div class="txt">
                  <h4>John Doe</h4>
                  <span>Frontend</span>
                </div>
              </div>
              <div class="status">
                <small>Last seen 2:20PM</small>
              </div>
            </div>
            <div class="msg-box bg d-flex">
              <div class="user">
                <img src="{{asset('assets/img/profile-pic.svg')}}" alt="" />
                <div class="txt">
                  <h4>John Doe</h4>
                  <span>Backend</span>
                </div>
              </div>
              <div class="status">
                <small>Last seen 2:20PM</small>
              </div>
            </div>
            <div class="msg-box bg d-flex">
              <div class="user">
                <img src="{{asset('assets/img/profile-pic.svg')}}" alt="" />
                <div class="txt">
                  <h4>John Doe</h4>
                  <span>Mobile</span>
                </div>
              </div>
              <div class="status">
                <small>Last seen 2:20PM</small>
              </div>
            </div>
            <div class="msg-box bg d-flex">
              <div class="user">
                <img src="{{asset('assets/img/profile-pic.svg')}}" alt="" />
                <div class="txt">
                  <h4>John Doe</h4>
                  <span>UI UX Designer</span>
                </div>
              </div>
              <div class="status">
                <small>Last seen 2:20PM</small>
              </div>
            </div>
            <div class="msg-box bg d-flex">
              <div class="user">
                <img src="{{asset('assets/img/profile-pic.svg')}}" alt="" />
                <div class="txt">
                  <h4>John Doe</h4>
                  <span>UI UX Designer</span>
                </div>
              </div>
              <div class="status">
                <small>Last seen 2:20PM</small>
              </div>
            </div>
            <div class="msg-box bg d-flex">
              <div class="user">
                <img src="{{asset('assets/img/profile-pic.svg')}}" alt="" />
                <div class="txt">
                  <h4>John Doe</h4>
                  <span>UI UX Designer</span>
                </div>
              </div>
              <div class="status">
                <small>Last seen 2:20PM</small>
              </div>
            </div>
            <div class="msg-box bg d-flex">
              <div class="user">
                <img src="{{asset('assets/img/profile-pic.svg')}}" alt="" />
                <div class="txt">
                  <h4>John Doe</h4>
                  <span>Backend</span>
                </div>
              </div>
              <div class="status">
                <small>Last seen 2:20PM</small>
              </div>
            </div>
            <div class="msg-box bg d-flex">
              <div class="user">
                <img src="{{asset('assets/img/profile-pic.svg')}}" alt="" />
                <div class="txt">
                  <h4>John Doe</h4>
                  <span>Mobile</span>
                </div>
              </div>
              <div class="status">
                <small>Last seen 2:20PM</small>
              </div>
            </div>
            <div class="msg-box bg d-flex">
              <div class="user">
                <img src="{{asset('assets/img/profile-pic.svg')}}" alt="" />
                <div class="txt">
                  <h4>John Doe</h4>
                  <span>UI UX Designer</span>
                </div>
              </div>
              <div class="status">
                <small>Last seen 2:20PM</small>
              </div>
            </div>
            <div class="msg-box bg d-flex">
              <div class="user">
                <img src="{{asset('assets/img/profile-pic.svg')}}" alt="" />
                <div class="txt">
                  <h4>John Doe</h4>
                  <span>UI UX Designer</span>
                </div>
              </div>
              <div class="status">
                <small>Last seen 2:20PM</small>
              </div>
            </div>
            <div class="msg-box bg d-flex">
              <div class="user">
                <img src="{{asset('assets/img/profile-pic.svg')}}" alt="" />
                <div class="txt">
                  <h4>John Doe</h4>
                  <span>UI UX Designer</span>
                </div>
              </div>
              <div class="status">
                <small>Last seen 2:20PM</small>
              </div>
            </div>
          </div>
        </aside>
        <!-- the caht section -->
        <section class="col-md-12 col-lg-8 my-3 m-auto chats">
          <div class="chat-head bg-wte d-flex">
            <div class="head-lft d-flex">
              <img src="{{asset('assets/img/profile-pic.svg')}}" alt="" />
              <h5>
                John Doe
                <br />
                <small>Online</small>
              </h5>
            </div>
            <div class="head-rgt d-flex">
              <i class="fa fa-search"></i>
              <i class="fa fa-paperclip"></i>
              <i class="fa fa-ellipsis-v"></i>
            </div>
          </div>
          <!-- chat body -->
          <div class="chat-body">
            <div class="recieve-msg cht">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Malesuada ante dignissim amet sit sagittis a eget
                tincidunt. Dignissim nec proin lorem vitae quam.
                Ultrices cras proin eget maecenas.
              </p>
              <div class="time">
                <small>7:41pm</small>
              </div>
            </div>

            <div class="sent cht">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit
              </p>
              <div class="time">
                <small>7:41pm</small>
              </div>
            </div>
            <div class="sent cht">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Malesuada ante dignissim amet sit sagittis a eget
                tincidunt. Dignissim nec proin lorem vitae quam.
                Ultrices cras proin eget maecenas.
              </p>
              <div class="time">
                <small>7:41pm</small>
              </div>
            </div>

            <div class="recieve-msg cht">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Malesuada ante dignissim amet sit sagittis a eget
                tincidunt. Dignissim nec proin lorem vitae quam.
                Ultrices cras proin eget maecenas.
              </p>
              <div class="time">
                <small>7:41pm</small>
              </div>
            </div>
            <div class="recieve-msg cht">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Malesuada ante dignissim amet sit sagittis a eget
                tincidunt. Dignissim nec proin lorem vitae quam.
                Ultrices cras proin eget maecenas.
              </p>
              <div class="time">
                <small>7:41pm</small>
              </div>
            </div>

            <div class="sent cht">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit
              </p>
              <div class="time">
                <small>7:41pm</small>
              </div>
            </div>
            <div class="sent cht">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Malesuada ante dignissim amet sit sagittis a eget
                tincidunt. Dignissim nec proin lorem vitae quam.
                Ultrices cras proin eget maecenas.
              </p>
              <div class="time">
                <small>7:41pm</small>
              </div>
            </div>

            <div class="recieve-msg cht">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Malesuada ante dignissim amet sit sagittis a eget
                tincidunt. Dignissim nec proin lorem vitae quam.
                Ultrices cras proin eget maecenas.
              </p>
              <div class="time">
                <small>7:41pm</small>
              </div>
            </div>
          </div>
          <!-- chat foot -->
          <div class="chat-foot bg-wte">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"
                  ><i class="fa fa-paperclip"></i
                ></span>
              </div>
              <input
                type="text"
                class="form-control"
                placeholder="Type a message"
                aria-describedby="basic-addon1"
              />
            </div>
            <button class="btn btn-msg">
              <i class="fa fa-send-o"></i>
            </button>
          </div>
        </section>
      </div>
    </div>
  </main>
</div>

<!-- content end -->
@endsection

@section('extrascript')
<script type="text/javascript">
    
</script>
@endsection