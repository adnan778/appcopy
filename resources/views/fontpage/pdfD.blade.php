<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resume/CV Design</title>
	<link rel="stylesheet" href="/cv/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
<div class="resume">


   <div class="resume_left">
     
     <div class="resume_profile">
       <img src="{{Auth::user()->image}}" alt="profile_pic">
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold">{{$info->name}}</p>
         </div>
         <ul>
           <li>
           
             <div class="data">
             {{$info->address}} <br /> {{$info->country}}
             </div>
           </li>
           <li>
         
             <div class="data">
             {{$info->phone}}
             </div>
           </li>
           <li>
            
             <div class="data">
             {{$info->email}}
             </div>
           </li>
          
         </ul>
       </div>
      
       <div class="resume_item resume_social">
         <div class="title">
           <p class="bold">Social</p>
         </div>
         <ul>
           <li>
             <div class="data">
               <p class="semi-bold">GANDER</p>
               <p>{{$info->gander}}</p>
             </div>
           </li>
           <li>
             <div class="data">
               <p class="semi-bold">DATE OF BIRTH</p>
               <p>{{$info->date}}</p>
             </div>
           </li>
           <li>
             <div class="data">
               <p class="semi-bold">AGE</p>
               <p>{{$info->age}}</p>
             </div>
           </li>
           <li>
             <div class="data">
               <p class="semi-bold">NATIONALITY</p>
               <p>{{$info->nationality}}</p>
             </div>
           </li>
           <li>
             <div class="data">
               <p class="semi-bold">AGE</p>
               <p>{{$info->age}}</p>
             </div>
           </li>
         
         </ul>
       </div>
     </div>
  </div>
  <div class="resume_right">
 
    <div class="resume_item resume_work">
        <div class="title">
           <p class="bold">Work Experience</p>
         </div>
        <ul>
            <li>
                <div class="date">{{$info->job1}}</div> 
                <div class="info">
                   
                  <p>{{$info->work1}}</p>
                </div>
            </li>
            <li>
              <div class="date">{{$info->job2}}</div>
              <div class="info">
                 
                  <p>{{$info->work2}}</p>
                </div>
            </li>
            <li>
              <div class="date">{{$info->job3}}</div>
              <div class="info">
                   
                  <p>{{$info->work3}}</p>
                </div>
            </li>
        </ul>
    </div>
    <div class="resume_item resume_education">
      <div class="title">
           <p class="bold">Education</p>
         </div>
      <ul>
            <li>
                <div class="date">{{$info->exam}}</div> 
                <div class="info">
                     <p class="semi-bold">SCHOOL: {{$info->dec}}</p> 
                  <p>GPA: {{$info->gpa}}</p>
                </div>
            </li>
            <li>
              <div class="date">{{$info->examB}}</div>
              <div class="info">
                     <p class="semi-bold">COLLAGE: {{$info->decB}}</p>
                     <p>GPA: {{$info->gpaB}}</p>
                </div>
            </li>
            <li>
              <div class="date">{{$info->examC}}</div>
              <div class="info">
                     <p class="semi-bold">UNIVERCITY: {{$info->decC}}</p>
                     <p>GPA: {{$info->gpaC}}</p>
                </div>
            </li>
        </ul>
    </div>
   
  </div>
</div>

</body>
</html>