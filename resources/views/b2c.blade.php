<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Daraja</title>

    <link  href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
    <div class="container">

        <div class="row mt-5">
            <div class="col-sm-8 mx-auto">
                <div class="card mt-5">
                    <div class="card-header">B2C Transaction</div>
                    <div class="card-body">
                        <div id="c2b_response"></div>
                        <form action="">
                            @csrf
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="number" name="phone" class="form-control" id="phone">
                            </div>
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="number" name="amount" class="form-control" id="amount">
                            </div>
                            <div class="form-group">
                                <label for="occasion">Occasion</label>
                                <input type="text" name="occasion" class="form-control" id="occasion">
                            </div>
                            <div class="form-group">
                                <label for="remarks">Remarks</label>
                                <input type="text" name="remarks" class="form-control" id="remarks">
                            </div>
                            <button id="b2csimulate" class="btn btn-primary">Simulate STK</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script>



document.getElementById('b2csimulate').addEventListener('click', (event) => {
    event.preventDefault()

    const requestBody = {
        amount: document.getElementById('amount').value,
        occasion: document.getElementById('occasion').value,
        remarks: document.getElementById('remarks').value,
        phone: document.getElementById('phone').value
    }

    axios.post('simulateb2c', requestBody)
    .then((response) => {

        console.log(response.data)
    })
    .catch((error) => {
        console.log(error);
    })
})

    </script>
</body>
</html>
