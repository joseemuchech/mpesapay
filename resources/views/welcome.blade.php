<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MpesaPay</title>

    <link  href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-8 mx-auto">

                <div class="card">
                    <div class="card-header">
                        Obtain Access Token
                    </div>
                    <h6 id="access_token"></h6>
                    <div class="card-body">
                        <button id="getAccessToken" class="btn btn-primary">Obtain Access Token</button>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        Register URLs
                    </div>
                    <div class="card-body">
                        <div id="response"></div>

                        <button id="registerURLS" class="btn btn-primary">Registe URls</button>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                      Simulate Transaction
                    </div>
                    <div class="card-body">
                       <form action="">
                        @csrf
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="text" class="form-control" name="amount" id="amount">
                        </div>
                        <div class="form-group">
                            <label for="account">Account</label>
                            <input type="text" class="form-control" name="account" id="account">
                        </div>

                       </form>
                        <button id="simulate" class="btn btn-primary mt-2">Simulate Payment</button>
                    </div>
                </div>

                {{-- <div class="card mt-4">
                    <div class="card-header">
                        Register URLs
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary">Registe URls</button>
                    </div>
                </div> --}}



            </div>
        </div>
    </div>

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    {{-- <script src="{{ asset('assets/js/app.js') }}"></script> --}}

<script>

 document.getElementById('getAccessToken').addEventListener('click', (event) =>{
    event.preventDefault()

    axios.post('/get_token', {})
    .then((response)=>{
        console.log(response.data);
        document.getElementById('access_token').innerHTML = response.data
    })
    .catch((error)=>{
        console.log(error);
    })
 })

</script>

</body>
</html>
