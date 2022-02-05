@extends('layouts.default')
@section('css')
<style type="text/css">
    .card-recent {
      height: 250px;
    }

    .text-small {
      font-size: 14px;
      line-height: 20px;
    }

    .anychart-credits-logo{
        display: none !Important;
    }

    .anychart-credits-text{
        display: none !Important;
    }
</style>
@endsection
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>

            <!-- PRODUCT -->
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                          <i class="fas fa-box"></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>Total @lang('app.product')</h4>
                          </div>
                          <div class="card-body">
                            {{number_format($product->count,0,",",".")}}<br>
                            <span class="text-muted float-right text-small">Rp. {{number_format($product->sum,0,",",".")}}</span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- DATA COLLECTION -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                          <i class="fas fa-database"></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>Total @lang('app.data_collection')</h4>
                          </div>
                          <div class="card-body">
                            {{number_format($dataCollection->count,0,",",".")}}<br>
                            <span class="text-muted float-right text-small">Rp. {{number_format($dataCollection->sum,0,",",".")}}</span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- MODEL -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                          <i class="fas fa-puzzle-piece"></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>Total @lang('app.model')</h4>
                          </div>
                          <div class="card-body">
                            {{number_format($model->count,0,",",".")}}<br>
                            <span class="text-muted float-right text-small">Rp. {{number_format($model->sum,0,",",".")}}</span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- COPY RIGHT -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                          <i class="fas fa-copyright"></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>Total @lang('app.copy_right')</h4>
                          </div>
                          <div class="card-body">
                            {{number_format($copyRight->count,0,",",".")}}<br>
                            <span class="text-muted float-right text-small">Rp. {{number_format($copyRight->sum,0,",",".")}}</span>
                          </div>
                        </div>
                      </div>
                    </div>
          
                    <!-- SOFTWARE -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                          <i class="fas fa-fax"></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>Total @lang('app.software')</h4>
                          </div>
                          <div class="card-body">
                            {{number_format($software->count,0,",",".")}}<br>
                            <span class="text-muted float-right text-small">Rp. {{number_format($software->sum,0,",",".")}}</span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- DOMAIN -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                          <i class="fas fa-globe"></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>Total @lang('app.domain')</h4>
                          </div>
                          <div class="card-body">
                            {{number_format($domain->count,0,",",".")}}<br>
                            <span class="text-muted float-right text-small">Rp. {{number_format($domain->sum,0,",",".")}}</span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- CLIENT -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                          <i class="fas fa-users"></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>Total @lang('app.client')</h4>
                          </div>
                          <div class="card-body">
                            {{number_format($client->count,0,",",".")}}
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- INSIGHT -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                          <i class="fas fa-file"></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>Total @lang('app.insights')</h4>
                          </div>
                          <div class="card-body">
                            {{number_format($insights->count,0,",",".")}}
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- REPORT -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                          <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>Total @lang('app.report')</h4>
                          </div>
                          <div class="card-body">
                            {{number_format($report->count,0,",",".")}}
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- CLIPPING ONLINE -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                          <i class="fas fa-paperclip"></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>Total @lang('app.clipping_online')</h4>
                          </div>
                          <div class="card-body">
                            {{number_format($clippingOnline->count,0,",",".")}}
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- VALUASI -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                          <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>Total Valuasi</h4>
                          </div>
                          <div class="card-body">
                            Rp. {{number_format($valuasi,0,",",".")}}
                          </div>
                        </div>
                      </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Chart Data Collection</h4>
                                <div class="card-header-action">
                                    {{-- <div class="btn-group">
                                      <a href="#" onclick="" class="btn btn-primary">Total Data</a>
                                      <a href="#" class="btn">Month</a>
                                    </div> --}}
                                    <select class="form-control" onchange="loadChartDataCollection()" id="filter-field">
                                        <option value="total_data">Total Data</option>
                                        <option value="missing_data">Missing Data</option>
                                        <option value="new_data">New Data</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-body" id="card-data-collection">
                                <div id="chart-data-collection" style="height: 200px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Chart Valuasi</h4>
                            </div>
                            <div class="card-body" id="card-valuasi">
                                <div id="chart-valuasi" style="height: 200px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')
<script src="{{url('/')}}/plugin/anychart/anychart-bundle.min.js"></script>
<script type="text/javascript">
    $(function() {
        loadAllData()
        console.log(shortNumber(10000))
    })

    function loadAllData() {
        loadChartDataCollection()
        loadChartValuasi()
    }

    async function loadChartDataCollection() {
        let data = await getDataCollection();
        drawLineChart('data-collection', data.series);
    }

    async function loadChartValuasi() {
        let data = await getDataValuasi();
        drawColumnChart('valuasi', data.series);
    }

    function getDataCollection() {
        field = $('#filter-field').val()
        url = "{{ url('ajax/dashboard/chart-data-collection') }}"
        const result = $.ajax({
            url: url,
            cache: false,
            data:{field}
        });

        return result
    }

    function getDataValuasi() {
        url = "{{ url('ajax/dashboard/chart-valuasi') }}"
        const result = $.ajax({
            url: url,
            cache: false,
        });

        return result
    }

    function drawLineChart(element,series=[]){
        idChart = 'chart-'+element
        $('#'+idChart).remove()
        $('#card-'+element).append(`<div id="${idChart}" style="height: 200px"></div>`)
        var chart = anychart.fromJson({
            "chart": {
                "type": "line",
                "series":series,
                "container": idChart
            },
        });
        chart.legend(true).tooltip(true);
        chart.yAxis().labels().format(function() {
          var value = this.value;
          return shortNumber(value);
        });
        chart.draw();
    }

    function drawColumnChart(element, series=[]){
        idChart = 'chart-'+element
        $('#'+idChart).remove()
        $('#card-'+element).append(`<div id="${idChart}" style="height: 200px"></div>`)
        var chart = anychart.fromJson({
          "chart": {
            "type": "column",
            "series":series,
            "container": idChart
          }
        });
        chart.legend(true).tooltip(true);
        chart.yAxis().labels().format(function() {
          var value = this.value;
          return shortNumber(value);
        });
        chart.draw();
    }

    function shortNumber(num) 
    {
        units = ['', 'K', 'M', 'B', 'T'];
        for (i = 0; num >= 1000; i++) {
            num /= 1000;
        }
        return Math.round(num) + units[i];
    }
</script>
@endsection
