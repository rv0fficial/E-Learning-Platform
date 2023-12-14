function loadData(name){
    if(name=="prev"){
        document.getElementById("pop1").src="./static/images/home/categories/R_2.jpg";
        document.getElementById("pop2").src="./static/images/home/categories/R_3.jpg";
        document.getElementById("pop3").src="./static/images/home/categories/R_4.jpg";
        document.getElementById("pop4").src="./static/images/home/categories/R_1.jfif";
        
        document.getElementById("pheader1").innerHTML="Web designing";
        document.getElementById("pheader2").innerHTML="Graphic designing";
        document.getElementById("pheader3").innerHTML="Industrial designing";
        document.getElementById("pheader4").innerHTML="Software development";

        document.getElementById("info1").innerHTML="Web designing is the process of planning, conceptualizing, and implementing the plan for designing a website in a way that is functional and offers a good user experience.";
        document.getElementById("info2").innerHTML="Graphic design is an interdisciplinary branch of design and of the fine arts.";
        document.getElementById("info3").innerHTML="Industrial design is a process of design applied to physical products that are to be manufactured by mass production.";
        document.getElementById("info4").innerHTML="Software development is the process used to design, program, document, test, and bug fix in order to create and maintain applications, frameworks, or other software components.";

    }
    else if(name=="nxt"){
        document.getElementById("pop1").src="./static/images/home/categories/R_5.jpg";
        document.getElementById("pop2").src="./static/images/home/categories/R_6.jpg";
        document.getElementById("pop3").src="./static/images/home/categories/R_7.jpg";
        document.getElementById("pop4").src="./static/images/home/categories/R_8.jpg";

        document.getElementById("pheader1").innerHTML="Interior designing";
        document.getElementById("pheader2").innerHTML="Fashion designing";
        document.getElementById("pheader3").innerHTML="Computer engineering";
        document.getElementById("pheader4").innerHTML="Machine learning";
        
        document.getElementById("info1").innerHTML="Interior design is the art and science of enhancing the interior of a building to achieve a healthier and more aesthetically pleasing environment for the people using the space.";
        document.getElementById("info2").innerHTML="Fashion design is the art of applying design, aesthetics, clothing construction and natural beauty to clothing and its accessories.";
        document.getElementById("info3").innerHTML="Computer engineering combines the basic theory of computer science with elements of electrical engineering.";
        document.getElementById("info4").innerHTML="Machine learning is a form of artificial intelligence (AI) that teaches computers to think in a similar way to how humans do: Learning and improving upon past experiences.";
      
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