<html dir="rtl">
<header>
<link rel="stylesheet" href="{{url('css/style.css')}}">
<style>
.switch {    
  position:absolute;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #cccccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  
  background-color: #8703a8;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

</style>
</header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">إدخال مادة أولية </div>
                <div class="card-body">
                    <form method="post" action="{{ route('resources.store') }}">

                        <div class="form-group">
                            @csrf
                            <label class="label">الاسم: </label>
                            <input type="text" name="name" class="form-control" required/>
                        </div>
                        <div class="form-group">
                          <label class="switch">أساسية
                              <div class="aaa"><input type="checkbox" name="is_essential" >
                              <span class="slider round" ></span></div>
                          </label>
                          </diV>
                        {{-- <label>أساسية</label>
                        <select class="is_ess">
                            <option name="true" value="true">نعم</option>
                            <option name="false" value="false">لا</option>
                        </select> --}}
                        <div class="form-group">
                            <label class="label">الكمية: </label>
                            <textarea name="quantity" rows="1" cols="30" class="form-control" required></textarea>
                        </div>
                        <div class="form-group" >
                            <label class="label">الواحدة: </label>
                            <textarea name="unit" rows="1" cols="30" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="label">الحد الأدنى: </label>
                            <textarea name="quantity_limit" rows="1" cols="30" class="form-control" ></textarea>
                        </div>
                        <div class="form-group">
                            <label class="label">سعر الواحدة: </label>
                            <textarea name="unit_price" rows="1" cols="30" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</html>