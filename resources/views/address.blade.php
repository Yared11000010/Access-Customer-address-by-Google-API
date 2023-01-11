<div class="contactsec1 mb-10">
    <div class="wrap">
        <form class="main-contactform" action="{{ url('save') }}" method="POST">
            @csrf
            @method('POST')
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="address_1" id="name">
                        <label for="name">Name</label>
                        <span class="input-highlight"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address_2" id="email">
                        <label for="email">Email</label>
                        <span class="input-highlight"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="city" id="phone">
                        <label for="subject">City</label>
                        <span class="input-highlight"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="state" id="phone">
                        <label for="subject">State</label>
                        <span class="input-highlight"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="zip" id="phone">
                        <label for="zip">Zip</label>
                        <span class="input-highlight"></span>
                    </div>
                </div>
                <
            </div>
            <div class="mt-5 buttons-type">
                <button type="submit" name="submit" class="btn shadow">Submit</button>
            </div>
        </form>
    </div>
</div>