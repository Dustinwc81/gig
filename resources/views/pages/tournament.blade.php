@extends('layouts.main')

@section('title', 'National Gigging Tournament Results')
@section('description', 'National Gigging Tournament Results on Lake Eucha in Jay, Oklahoma')

@section('content')

   <div class="row text-center">
      <div class="col-md-12">
            <img class="img-center center-block" src="{{ URL::asset('images/sucker.png')}}" width="300" height="350">
      </div>
   </div>

   <div class="row text-white spacer">
      <div class="col-md-12">
         <h2>National Gigging Tournament Championship</h2><br>
         <h5>1973 to Present Top Ten + Big Fish Winners</h5><br>
         <p>5 pts. per lb. - Red Horse Suckers<br>
            4 pts. per lb. - Spotted, White and Hog Suckers<br>
            3 pts. per lb. - White and Sand Bass<br>
            1 pt. per lb. - Carp, Drum, Perch, Shad and Flathead Catfish </p>
            <div class="spacer">
               <p>** In an effort to keep all results as accurate as possible, if you have any information regarding missing results, inaccurate results, or great stories to add to the notes,  please contact: <br>
               John Henry Ward:  Phone Number:  918-964-9725 Email: jhward@ridgerunners.net
               </p>
            </div>
      </div>

   </div>

   {{--<label>Select Year</label>--}}
   {{--<select name="tournament" id="tournament" onchange="getSelectValue()">--}}
       {{--@foreach($tournaments as $tournament)--}}
           {{--<option value="{{ $tournament->id }}">--}}
               {{--{{ $tournament->year }}--}}
           {{--</option>--}}
       {{--@endforeach--}}
   {{--</select>--}}

   <div class="row text-white">

   @foreach ($tournaments as $tournament)

      <div class="col-sm-4 spacer">

         <h6>{{ $tournament->year }}  @if ($tournament->id==1 || $tournament->id==21 || $tournament->id==31 || $tournament->id==41 || $tournament->id==51 || $tournament->id==61 || $tournament->id==71 || $tournament->id==81 || $tournament->id==91)
         {{ $tournament->id }}st

      @elseif ($tournament->id==2 || $tournament->id==22 || $tournament->id==32 || $tournament->id==42 || $tournament->id==52 || $tournament->id==62 || $tournament->id==72 || $tournament->id==82 || $tournament->id==92)
            {{ $tournament->id }}nd

         @elseif ($tournament->id==3 || $tournament->id==23 || $tournament->id==33 || $tournament->id==43 || $tournament->id==53 || $tournament->id==63 || $tournament->id==73 || $tournament->id==83 || $tournament->id==93)
               {{ $tournament->id }}rd

               @else
                  {{ $tournament->id }}th
         @endif
         Annual NGCGT</h6>
         <table class="table table-condensed table-hover"  id="result">
               <thead>
                  <tr>
                     <th>Place</th>
                     <th>Giggers</th>
                     <th>Points</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>1st</td>
                     <td>{{ $tournament->firstPlace }}</td>
                     <td>{{ $tournament->firstPlacePoints }}</td>
                  </tr>
                  <tr>
                     <td>2nd</td>
                     <td>{{ $tournament->secondPlace }}</td>
                     <td>{{ $tournament->secondPlacePoints }}</td>
                  </tr>
                  <tr>
                     <td>3rd</td>
                     <td>{{ $tournament->thirdPlace }}</td>
                     <td>{{ $tournament->thirdPlacePoints }}</td>
                  </tr>
                  <tr>
                     <td>4th</td>
                     <td>{{ $tournament->fourthPlace }}</td>
                     <td>{{ $tournament->fourthPlacePoints }}</td>
                  </tr>
                  <tr>
                     <td>5th</td>
                     <td>{{ $tournament->fifthPlace }}</td>
                     <td>{{ $tournament->fifthPlacePoints }}</td>
                  </tr>
                  <tr>
                     <td>6th</td>
                     <td>{{ $tournament->sixthPlace }}</td>
                     <td>{{ $tournament->sixthPlacePoints }}</td>
                  </tr>
                  <tr>
                     <td>7th</td>
                     <td>{{ $tournament->seventhPlace }}</td>
                     <td>{{ $tournament->seventhPlacePoints }}</td>
                  </tr>
                  <tr>
                     <td>8th</td>
                     <td>{{ $tournament->eighthPlace }}</td>
                     <td>{{ $tournament->eighthPlacePoints }}</td>
                  </tr>
                  <tr>
                     <td>9th</td>
                     <td>{{ $tournament->ninthPlace }}</td>
                     <td>{{ $tournament->ninthPlacePoints }}</td>
                  </tr>
                  <tr>
                     <td>10th</td>
                     <td>{{ $tournament->tenthPlace }}</td>
                     <td>{{ $tournament->tenthPlacePoints }}</td>
                  </tr>
                  <tr>
                     <td>Big Fish</td>
                     <td>{{ $tournament->bigFish }}</td>
                     <td>{{ $tournament->bigFishPoints }}</td>
                  </tr>
               </tbody>
            </table>
            <p>{{ $tournament->notes }}
         </p>

      </div><!--End of col div-->

    @endforeach

   </div> <!--End of row div-->


@endsection
