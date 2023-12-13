function loadData(name){
    if(name=="prev"){
        document.getElementById("pop1").src="./static/images/home/categories/R_2.jpg";
        document.getElementById("pop2").src="./static/images/home/categories/R_3.jpg";
        document.getElementById("pop3").src="./static/images/home/categories/R_4.jpg";
        document.getElementById("pop4").src="./static/images/home/categories/R_1.jfif";
        
        document.getElementById("pheader1").innerHTML="web designing";
        document.getElementById("pheader2").innerHTML="graphic designing";
        document.getElementById("pheader3").innerHTML="industrial designing";
        document.getElementById("pheader4").innerHTML="software development";

        document.getElementById("info1").innerHTML="Lorem ipsum";
        document.getElementById("info2").innerHTML="Lorem ipsum";
        document.getElementById("info3").innerHTML="Lorem ipsum";
        document.getElementById("info4").innerHTML="Lorem ipsum";

    }
    else if(name=="nxt"){
        document.getElementById("pop1").src="./static/images/home/categories/R_5.jpg";
        document.getElementById("pop2").src="./static/images/home/categories/R_6.jpg";
        document.getElementById("pop3").src="./static/images/home/categories/R_7.jpg";
        document.getElementById("pop4").src="./static/images/home/categories/R_8.jpg";

        document.getElementById("pheader1").innerHTML="interior designing";
        document.getElementById("pheader2").innerHTML="fashion designing ";
        document.getElementById("pheader3").innerHTML="computer engineering";
        document.getElementById("pheader4").innerHTML="machine learning";
        
        document.getElementById("info1").innerHTML="Lorem ipsum";
        document.getElementById("info2").innerHTML="Lorem ipsum";
        document.getElementById("info3").innerHTML="Lorem ipsum";
        document.getElementById("info4").innerHTML="Lorem ipsum";
      
    }
}


function reviews(name){
    if(name=="rone"){
        document.getElementById("profilepic").src="./static/images/home/review/people1.jpg";
        
        document.getElementById("profilename").innerHTML="Bryan Cranston";
        
        document.getElementById("profilereview").innerHTML="Please add more videos, i like your lectures. Make videos for data structures and algorithms also.";
        
    }
    else if(name=="rtwo"){
        document.getElementById("profilepic").src="./static/images/home/review/people2.png";
        
        document.getElementById("profilename").innerHTML="Daniel Witecker";
        
        document.getElementById("profilereview").innerHTML="thanks neso academy for these amazing courses";
        
    }
    else if(name=="rthree"){
        document.getElementById("profilepic").src="./static/images/home/review/people3.png";
        
        document.getElementById("profilename").innerHTML="Rainey jones";
        
        document.getElementById("profilereview").innerHTML=":) very nice video . really helpful . keep it up";
        
    }
    else if(name=="rfour"){
        document.getElementById("profilepic").src="./static/images/home/review/people4.jpg";
        
        document.getElementById("profilename").innerHTML="Sophie Alan";
        
        document.getElementById("profilereview").innerHTML="Would you spread out tutorials for data base ??plz";
        
    }
    else if(name=="rfive"){
        document.getElementById("profilepic").src="./static/images/home/review/people5.jpg";
        
        document.getElementById("profilename").innerHTML="Charlott durret";
        
        document.getElementById("profilereview").innerHTML="For god sake plz upload the full os course videos 🙏🙏🙏🙏";
        
    }

}