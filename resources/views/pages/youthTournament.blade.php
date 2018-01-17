@extends('layouts.main')

@section('title', '|  Gigging Tournament')

@section('content')

   <div class="row" style="padding-bottom:30px">
      <div class="col-md-10 offset-1">
            <img src="{{ URL::asset('images/sucker.png')}}" width="300" height="350">
      </div>
   </div>

   <div class="row text-white" style="padding-bottom: 30px">
      <div class="col-md-8 offset-2">
         <h2>National Youth Gigging Tournament Championship</h2><br>
         <h5>2011 to Present Top Ten + Big Fish Winners</h5><br>
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

   <div class="row text-white" style="padding-bottom:30px">

      @foreach ($youths as $youth)

         @if ($youth->ageGroup==2)  <!-- group 11-15 years old -->

         <div class="col-sm-4 offset-1 spacer">
            <h6>{{ $youth->year }}
               @if ($youth->year - 2010 ==1 || $youth->year - 2010 ==21 || $youth->year - 2010 ==31 || $youth->year - 2010 ==41 || $youth->year - 2010 ==51 || $youth->year - 2010 ==61 || $youth->year - 2010 ==71)
            {{ $youth->year - 2010  }}st

         @elseif ($youth->year - 2010 ==2 || $youth->year - 2010 ==22 || $youth->year - 2010 ==32 || $youth->year - 2010 ==42 || $youth->year - 2010 ==52 || $youth->year - 2010 ==62 || $youth->year - 2010 ==72)
               {{ $youth->year - 2010  }}nd

            @elseif ($youth->year - 2010 ==3 || $youth->year - 2010 ==23 || $youth->year - 2010 ==33 || $youth->year - 2010 ==43 || $youth->year - 2010 ==53 || $youth->year - 2010 ==63 || $youth->year - 2010 ==73)
                  {{ $youth->year - 2010 }}rd

                  @else
                     {{ $youth->year - 2010 }}th
            @endif Annual NYGCGT</h6>
            <h6>11-15 Year Old Age Group</h6>
            <table class="table table-condensed">
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
                        <td>{{ $youth->firstPlace }}</td>
                        <td>{{ $youth->firstPlacePoints }}</td>
                     </tr>
                     <tr>
                        <td>2nd</td>
                        <td>{{ $youth->secondPlace }}</td>
                        <td>{{ $youth->secondPlacePoints }}</td>
                     </tr>
                     <tr>
                        <td>3rd</td>
                        <td>{{ $youth->thirdPlace }}</td>
                        <td>{{ $youth->thirdPlacePoints }}</td>
                     </tr>
                     <tr>
                        <td>4th</td>
                        <td>{{ $youth->fourthPlace }}</td>
                        <td>{{ $youth->fourthPlacePoints }}</td>
                     </tr>
                     <tr>
                        <td>5th</td>
                        <td>{{ $youth->fifthPlace }}</td>
                        <td>{{ $youth->fifthPlacePoints }}</td>
                     </tr>
                     <tr>
                        <td>6th</td>
                        <td>{{ $youth->sixthPlace }}</td>
                        <td>{{ $youth->sixthPlacePoints }}</td>
                     </tr>
                     <tr>
                        <td>7th</td>
                        <td>{{ $youth->seventhPlace }}</td>
                        <td>{{ $youth->seventhPlacePoints }}</td>
                     </tr>
                     <tr>
                        <td>8th</td>
                        <td>{{ $youth->eighthPlace }}</td>
                        <td>{{ $youth->eighthPlacePoints }}</td>
                     </tr>
                     <tr>
                        <td>9th</td>
                        <td>{{ $youth->ninthPlace }}</td>
                        <td>{{ $youth->ninthPlacePoints }}</td>
                     </tr>
                     <tr>
                        <td>10th</td>
                        <td>{{ $youth->tenthPlace }}</td>
                        <td>{{ $youth->tenthPlacePoints }}</td>
                     </tr>
                     <tr>
                        <td>Big Fish</td>
                        <td>{{ $youth->bigFish }}</td>
                        <td>{{ $youth->bigFishPoints }}</td>
                     </tr>
                  </tbody>
               </table>
               <p>{{ $youth->notes }}</p>

         </div><!--End of col div-->



      @elseif ($youth->ageGroup==3)  <!-- group 10 and under years old -->

         <div class="col-sm-4 offset-1">
            <h6>{{ $youth->year }}
               @if ($youth->year - 2010 ==1 || $youth->year - 2010 ==21 || $youth->year - 2010 ==31 || $youth->year - 2010 ==41 || $youth->year - 2010 ==51 || $youth->year - 2010 ==61 || $youth->year - 2010 ==71)
         {{ $youth->year - 2010  }}st

      @elseif ($youth->year - 2010 ==2 || $youth->year - 2010 ==22 || $youth->year - 2010 ==32 || $youth->year - 2010 ==42 || $youth->year - 2010 ==52 || $youth->year - 2010 ==62 || $youth->year - 2010 ==72)
            {{ $youth->year - 2010  }}nd

         @elseif ($youth->year - 2010 ==3 || $youth->year - 2010 ==23 || $youth->year - 2010 ==33 || $youth->year - 2010 ==43 || $youth->year - 2010 ==53 || $youth->year - 2010 ==63 || $youth->year - 2010 ==73)
               {{ $youth->year - 2010 }}rd

               @else
                  {{ $youth->year - 2010 }}th
         @endif Annual NYGCGT</h6>
            <h6>10 and Under Year Old Age Group</h6>
            <table class="table table-condensed">
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
                        <td>{{ $youth->firstPlace }}</td>
                        <td>{{ $youth->firstPlacePoints }}</td>
                     </tr>
                     <tr>
                        <td>2nd</td>
                        <td>{{ $youth->secondPlace }}</td>
                        <td>{{ $youth->secondPlacePoints }}</td>
                     </tr>
                     <tr>
                        <td>3rd</td>
                        <td>{{ $youth->thirdPlace }}</td>
                        <td>{{ $youth->thirdPlacePoints }}</td>
                     </tr>
                     <tr>
                        <td>4th</td>
                        <td>{{ $youth->fourthPlace }}</td>
                        <td>{{ $youth->fourthPlacePoints }}</td>
                     </tr>
                     <tr>
                        <td>5th</td>
                        <td>{{ $youth->fifthPlace }}</td>
                        <td>{{ $youth->fifthPlacePoints }}</td>
                     </tr>
                     <tr>
                        <td>6th</td>
                        <td>{{ $youth->sixthPlace }}</td>
                        <td>{{ $youth->sixthPlacePoints }}</td>
                     </tr>
                     <tr>
                        <td>7th</td>
                        <td>{{ $youth->seventhPlace }}</td>
                        <td>{{ $youth->seventhPlacePoints }}</td>
                     </tr>
                     <tr>
                        <td>8th</td>
                        <td>{{ $youth->eighthPlace }}</td>
                        <td>{{ $youth->eighthPlacePoints }}</td>
                     </tr>
                     <tr>
                        <td>9th</td>
                        <td>{{ $youth->ninthPlace }}</td>
                        <td>{{ $youth->ninthPlacePoints }}</td>
                     </tr>
                     <tr>
                        <td>10th</td>
                        <td>{{ $youth->tenthPlace }}</td>
                        <td>{{ $youth->tenthPlacePoints }}</td>
                     </tr>
                     <tr>
                        <td>Big Fish</td>
                        <td>{{ $youth->bigFish }}</td>
                        <td>{{ $youth->bigFishPoints }}</td>
                     </tr>
                  </tbody>
               </table>
               <p>{{ $youth->notes }}
            </p>

         </div><!--End of col div-->


         @else

            <div class="col-sm-4 offset-1">
               <h6>{{ $youth->year }}
                  @if ($youth->year - 2010 ==1 || $youth->year - 2010 ==21 || $youth->year - 2010 ==31 || $youth->year - 2010 ==41 || $youth->year - 2010 ==51 || $youth->year - 2010 ==61 || $youth->year - 2010 ==71)
            {{ $youth->year - 2010  }}st

         @elseif ($youth->year - 2010 ==2 || $youth->year - 2010 ==22 || $youth->year - 2010 ==32 || $youth->year - 2010 ==42 || $youth->year - 2010 ==52 || $youth->year - 2010 ==62 || $youth->year - 2010 ==72)
               {{ $youth->year - 2010  }}nd

            @elseif ($youth->year - 2010 ==3 || $youth->year - 2010 ==23 || $youth->year - 2010 ==33 || $youth->year - 2010 ==43 || $youth->year - 2010 ==53 || $youth->year - 2010 ==63 || $youth->year - 2010 ==73)
                  {{ $youth->year - 2010 }}rd

                  @else
                     {{ $youth->year - 2010 }}th
            @endif Annual NYGCGT</h6>
               <h6>15 and Under Year Old Age Group</h6>
               <table class="table table-condensed">
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
                           <td>{{ $youth->firstPlace }}</td>
                           <td>{{ $youth->firstPlacePoints }}</td>
                        </tr>
                        <tr>
                           <td>2nd</td>
                           <td>{{ $youth->secondPlace }}</td>
                           <td>{{ $youth->secondPlacePoints }}</td>
                        </tr>
                        <tr>
                           <td>3rd</td>
                           <td>{{ $youth->thirdPlace }}</td>
                           <td>{{ $youth->thirdPlacePoints }}</td>
                        </tr>
                        <tr>
                           <td>4th</td>
                           <td>{{ $youth->fourthPlace }}</td>
                           <td>{{ $youth->fourthPlacePoints }}</td>
                        </tr>
                        <tr>
                           <td>5th</td>
                           <td>{{ $youth->fifthPlace }}</td>
                           <td>{{ $youth->fifthPlacePoints }}</td>
                        </tr>
                        <tr>
                           <td>6th</td>
                           <td>{{ $youth->sixthPlace }}</td>
                           <td>{{ $youth->sixthPlacePoints }}</td>
                        </tr>
                        <tr>
                           <td>7th</td>
                           <td>{{ $youth->seventhPlace }}</td>
                           <td>{{ $youth->seventhPlacePoints }}</td>
                        </tr>
                        <tr>
                           <td>8th</td>
                           <td>{{ $youth->eighthPlace }}</td>
                           <td>{{ $youth->eighthPlacePoints }}</td>
                        </tr>
                        <tr>
                           <td>9th</td>
                           <td>{{ $youth->ninthPlace }}</td>
                           <td>{{ $youth->ninthPlacePoints }}</td>
                        </tr>
                        <tr>
                           <td>10th</td>
                           <td>{{ $youth->tenthPlace }}</td>
                           <td>{{ $youth->tenthPlacePoints }}</td>
                        </tr>
                        <tr>
                           <td>Big Fish</td>
                           <td>{{ $youth->bigFish }}</td>
                           <td>{{ $youth->bigFishPoints }}</td>
                        </tr>
                     </tbody>
                  </table>
                  <p>{{ $youth->notes }}
               </p>

            </div><!--End of col div-->

            @endif
      @endforeach

   </div> <!-- end of div row -->

@endsection
