@section('title')
注册
@endsection

@extends('pcview::layouts.auth')

@section('body_class')class="gray"@endsection

@section('content')
<div class="reg_cont" style="height:640px;">
    <ul class="reg_menu">
        <li><a href="{{ route('pc:register') }}" @if($type == 0) class="current" @endif>手机注册</a></li>
        <li><a href="{{ route('pc:register', ['type'=>1]) }}" @if($type == 1) class="current" @endif>邮箱注册</a></li>
    </ul>
    
    @if($type == 0)
    <div class="reg_form">
        <form method="POST" id="reg_form">
            <div class="reg_input">
                <label>手机号</label>
                <span class="input_span" id="phone">
                    <input type="text" placeholder="输入11位手机号码" name="phone" maxlength="11" id="inputphone"/>
                </span>
            </div>
            <div class="reg_input">
                <label>图形验证码</label>
                <span class="input_span w_280">
                    <input type="text" placeholder="输入图形验证码" name="captchacode" maxlength="6" />
                </span>
                <img onclick="re_captcha()" src="{{ route('pc:captcha', ['tmp'=>1]) }}"  alt="验证码" title="刷新图片" id="captchacode" class="captcha">
            </div>
            <div class="reg_input">
                <label>手机验证码</label>
                <span class="input_span w_280"><input type="text" placeholder="输入手机验证码" name="verifiable_code" /></span>
                <span class="get_code" id="smscode" type="reg">获取验证码</span>
            </div>
            <div class="reg_input">
                <label>设置昵称</label>
                <span class="input_span">
                    <input type="text" placeholder="2-10个字符" name="name"  maxlength="8"/>
                </span>
            </div>
            <div class="reg_input">
                <label>设置密码</label>
                <span class="input_span">
                    <input type="password" placeholder="限6-15个字符，区分大小写" name="password" />
                </span>
            </div>
            <div class="reg_input">
                <label>确认密码</label>
                <span class="input_span">
                    <input type="password" placeholder="再次输入密码" name="repassword" />
                </span>
            </div>
            <input type="hidden" name="verifiable_type" value="sms">

            <a id="reg_btn" class="reg_btn">注册</a>
        </form>
    </div>
    @else
    <div class="reg_form">
        <form method="POST" id="reg_form">
            <div class="reg_input">
                <label>邮箱</label>
                <span class="input_span">
                    <input type="text" placeholder="输入邮箱" name="email" id="inputphone"/>
                </span>
            </div>
            <div class="reg_input">
                <label>图形验证码</label>
                <span class="input_span w_280">
                    <input type="text" placeholder="输入图形验证码" name="captchacode" maxlength="6" />
                </span>
                <img onclick="re_captcha()" src="{{ route('pc:captcha', ['tmp'=>1]) }}"  alt="验证码" title="刷新图片" id="captchacode" class="captcha">
            </div>
            <div class="reg_input">
                <label>邮箱验证码</label>
                <span class="input_span w_280">
                    <input type="text" placeholder="输入邮箱验证码" name="verifiable_code" />
                </span>
                <span class="get_code" id="smscode" type="reg">获取验证码</span>
            </div>
            <div class="reg_input">
                <label>设置昵称</label>
                <span class="input_span">
                    <input type="text" placeholder="2-10个字符" name="name" maxlength="8" />
                </span>
            </div>
            <div class="reg_input">
                <label>设置密码</label>
                <span class="input_span">
                    <input type="password" placeholder="限6-15个字符，区分大小写" name="password" />
                </span>
            </div>
            <div class="reg_input">
                <label>确认密码</label>
                <span class="input_span">
                    <input type="password" placeholder="再次输入密码" name="repassword" />
                </span>
            </div>
            <input type="hidden" name="verifiable_type" value="mail">

            <a id="reg_btn" class="reg_btn">注册</a>
        </form>
    </div>
    @endif

</div>
@endsection

@section('scripts')
<script src="{{ asset('zhiyicx/plus-component-pc/js/jquery.form.js') }} "></script>
<script src="{{ asset('zhiyicx/plus-component-pc/js/module.passport.js') }} "></script>
@endsection
