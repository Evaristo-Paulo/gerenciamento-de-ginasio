@extends('painel.template')
<!-- page content -->
@section('main-content')
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Relatório |<small>Clientes</small></h2>
                        <div class="clearfix"></div>
                        <button class="btn bg-danger text-white btnPDF" ><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>

                        @if( session('create-auth') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('create-auth') }}</li>
                            </ul>
                        @endif
                        @if( session('update-auth') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('update-auth') }}</li>
                            </ul>
                        @endif
                        @if( session('edit-auth') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('edit-auth') }}</li>
                            </ul>
                        @endif
                        @if( session('delete-auth') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('delete-auth') }}</li>
                            </ul>
                        @endif
                        @if( session('warning') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('warning') }}</li>
                            </ul>
                        @endif
                        @if( session('user-not-found') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('user-not-found') }}</li>
                            </ul>
                        @endif
                        @if( session('error') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('error') }}</li>
                            </ul>
                        @endif
                        @if( session('error-exception') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('error-exception') }}</li>
                            </ul>
                        @endif
                        @if( session('password-different') )
                            <ul class="alert alert-warning animated fadeInDown" role="alert">
                                <li><i class="fa fa-warning"></i> {{ session('password-different') }}</li>
                            </ul>
                        @endif
                        @if( session('updated') )
                            <ul class="alert alert-success animated fadeInDown" role="alert">
                                <li><i class="fa fa-check"></i> {{ session('updated') }}</li>
                            </ul>
                        @endif
                        @if( session('deleted') )
                            <ul class="alert alert-success animated fadeInDown" role="alert">
                                <li><i class="fa fa-check"></i> {{ session('deleted') }}</li>
                            </ul>
                        @endif
                        @if( session('password-changed') )
                            <ul class="alert alert-success animated fadeInDown" role="alert">
                                <li><i class="fa fa-check"></i> {{ session('password-changed') }}</li>
                            </ul>
                        @endif
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    
                    <div class="x_content">
                        
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">

                                    <table id="datatable-responsive"
                                        class="tablePDF table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Gênero</th>
                                                <th>Telefone</th>
                                                <th>Email</th>
                                                <th>Endereço</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($workers as $worker)
                                                <tr>
                                                    <td>{{ $worker->name }}</td>
                                                    <td>{{ $worker->gender }}</td>
                                                    <td>{{ $worker->phone }}</td>
                                                    <td>{{ $worker->email }}</td>
                                                    <td>{{ $worker->municipe }}, {{ $worker->hood }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6">
                                                        <h3>Sem funcionários registados</h3>
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->


@endsection

@section('menu-aside')
@include('painel.partials.relatory-client-aside')
@endsection

@push('css')
    <link href="{{ url('painel/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ url('painel/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <link
        href="{{ url('painel/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ url('painel/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ url('painel/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ url('painel/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ url('painel/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}"
        rel="stylesheet">



@endpush

@push('js')
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"
        integrity="sha512-AtJGnumoR/L4JbSw/HzZxkPbfr+XiXYxoEPBsP6Q+kNo9zh4gyrvg25eK2eSsp1VAEAP1XsMf2M984pK/geNXw=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>
    <script>
        document.querySelector('.btnPDF').addEventListener('click', () => {

            // Header and footers - shows how header and footers can be drawn

            var doc = new jsPDF()
            var totalPagesExp = '{total_pages_count_string}';

            doc.autoTable({
                html: '.tablePDF',
                didDrawPage: function (data) {
                    // Header
                    doc.setFontSize(11)
                    doc.setTextColor(40)

                    var tableTitle = 'Relatório de Clientes'
                    var textWidth = doc.getStringUnitWidth(tableTitle) * doc.internal.getFontSize() / doc.internal.scaleFactor;
                    var textOffset = (doc.internal.pageSize.width - textWidth)/2;
                    doc.text(textOffset, 25, tableTitle);

                    // Footer
                    var str = 'Página: ' + doc.internal.getNumberOfPages()
                    // Total page number plugin only available in jspdf v1.0+
                    if (typeof doc.putTotalPages === 'function') {
                        str = str + ' de ' + totalPagesExp
                    }
                    doc.setFontSize(10)

                    // jsPDF 1.4+ uses getWidth, <1.4 uses .width
                    var pageSize = doc.internal.pageSize
                    var pageHeight = pageSize.height ? pageSize.height : pageSize.getHeight()
		    var textWidth = doc.getStringUnitWidth(str) * doc.internal.getFontSize() / doc.internal.scaleFactor;
                    var textOffset = (doc.internal.pageSize.width - textWidth);
                    //doc.text(textOffset, 25, str, pageHeight - 10);
                    doc.text(str, textOffset, pageHeight - 10)
                },
                margin: { top: 30 },
            })

            // Total page number plugin only available in jspdf v1.0+
            if (typeof doc.putTotalPages === 'function') {
                doc.putTotalPages(totalPagesExp)
            }

            doc.save("relatorio-de-clientes.pdf");
        });
    </script>

    <script src="{{ url('painel/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ url('painel/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}">
    </script>
    <script src="{{ url('painel/vendors/fastclick/lib/fastclick.js') }}"></script>
    <script src="{{ url('painel/vendors/nprogress/nprogress.js') }}"></script>
    <script src="{{ url('painel/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ url('painel/vendors/datatables.net/js/jquery.dataTables.min.js') }}">
    </script>
    <script
        src="{{ url('painel/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}">
    </script>
    <script
        src="{{ url('painel/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}">
    </script>
    <script
        src="{{ url('painel/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}">
    </script>
    <script src="{{ url('painel/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}">
    </script>
    <script src="{{ url('painel/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}">
    </script>
    <script src="{{ url('painel/vendors/datatables.net-buttons/js/buttons.print.min.js') }}">
    </script>
    <script
        src="{{ url('painel/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}">
    </script>
    <script
        src="{{ url('painel/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}">
    </script>
    <script
        src="{{ url('painel/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}">
    </script>
    <script
        src="{{ url('painel/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}">
    </script>
    <script
        src="{{ url('painel/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}">
    </script>
    <script src="{{ url('painel/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ url('painel/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ url('painel/vendors/pdfmake/build/vfs_fonts.js') }}"></script>


@endpush
