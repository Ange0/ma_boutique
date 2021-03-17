@extends('layouts.master')

@section('extra-meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
    @livewire('cart.item')
@endsection

@section('extra-js')
    <script type="text/javascript">
        var selects = document.querySelectorAll('#select-qty');
        console.info(selects);

        selects = Array.from(selects).forEach((element) => {
            element.addEventListener('change', function () {
                var $token = $('meta[name="csrf-token"]').attr('content');
                var rowId = this.getAttribute('data-id');
                fetch(
                    `/panier/${rowId}`,
                    { 
                        headers: {
                                    "Content-type": "application/json",
                                    "Accept": "applicaction/json, text-plain, */*",
                                    "X-Requested-With": "XMLHttpRequest",
                                    "X-CSRF-TOKEN": $token
                                },
                        method: 'post',

                        body: JSON.stringify({
                            qty: this.value
                        })
                    }
                ).then((data) => {
                    console.log(data);
                    location.reload();
                }).catch((error) => {
                    console.log(error);
                })
            })
            console.log(element);
        });
    </script>
@endsection