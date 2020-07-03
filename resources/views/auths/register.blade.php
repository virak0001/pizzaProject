@extends('layouts.main')
@yield('content')
<div class="auth">
  <div class="auth__header">
  </div>
  <div class="auth__body">
    <form class="auth__form" autocomplete="off" action="/signin" method="post">
      @csrf
      @method('put')
      <div class="auth__form_body">
        <h3 class="auth__form_title">
        <img src="images/logo.svg" alt="" width="50">
        Peperoni App
        </h3>
        <div>
          <div class="form-group">
            <label class="text-uppercase small">Email</label>
            <input type="email" name="email" class="form-control" required placeholder="Enter email" >
            @error('email')
                <small class="text-danger">{{$message}}</small>           
            @enderror
          </div>
          <div class="form-group">
            <label class="text-uppercase small">Password</label>
            <input type="password" name="password" class="form-control" required placeholder="Password" >
            @error('password')
            <small class="text-danger">{{$message}}</small>            
            @enderror
          </div>
          <div class="form-group"
            <label class="text-uppercase small">Address</label>
            <textarea name="address"  class="form-control" required placeholder="Address" ></textarea>
            @error('address')           
              <small class="text-danger">{{$message}}</small>  
            @enderror
          </div>
          <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" name="role" class="form-check-input" value="1">I'm a manager
            </label>
        </div>
        </div>
      </div>
      <div class="auth__form_actions">
        <button class="btn btn-primary btn-lg btn-block">
          NEXT
        </button>
        <div class="mt-2">
          <a href="/" class="small text-uppercase">
            SIGN IN INSTEAD
          </a>
        </div>
      </div>
    </form>
  </div>
</div>