 var timer;
        var zoom = {
            indexNum:0,
            widthNum:0,
            heightNum:null,
            topArr:null,
            leftArr:null,
            indexArr:null,
            times:2000,
            currentPicIndex:1,
            init:function(){
                this.widthNum = 220;
                this.heightNum = ["365","315","265","265","315"];
                this.topArr = ["20","40","60","60","40"];
                this.leftArr = ["212","308","404","20","116"];
                this.indexArr = ["10","8","6","6","8"];
            },
        };
        function moveStep(direction) {
            //向左滑动
            if(direction == -1){
                zoom.currentPicIndex++;
            }

            //向右滑动
            if(direction == 1){
                zoom.currentPicIndex--;
            }

            if(zoom.currentPicIndex<1){
                zoom.currentPicIndex = 5;
            }

            if(zoom.currentPicIndex>5){
                zoom.currentPicIndex = 1;
            }

            var temp = zoom.currentPicIndex;

            for(var i=0;i<5;i++){

                $("#box li:nth-child("+temp+")").css ({
                    left:zoom.leftArr[i]+"px",
                    height:zoom.heightNum[i]+"px",
                    top:zoom.topArr[i]+"px",
                    "z-index":zoom.indexArr[i],
                });

                temp += 1;
                if(temp > 5){
                    temp = 1;
                }
            }

            $("#box li div").css({
                opacity:0.4,
            });

            $("#box li:nth-child("+zoom.currentPicIndex+") div").css({
                opacity:0,
            });
        };
        function moveRight(){
            clearInterval(timer);
            moveStep(1);
        };


        function moveLeft(){
            clearInterval(timer);
            moveStep(-1);
        }

        function start(){
            moveStep(1);
        }

        $(function(){
            zoom.init();
            for(var i=1;i<6;i++){
                $("#box li:nth-child("+i+")").css ({
                    "z-index":zoom.indexArr[i-1],
                    "width":zoom.widthNum[i-1]+"px",
                    "height":zoom.heightNum[i-1]+"px",
                    "left":zoom.leftArr[i-1]+"px",
                    "top":zoom.topArr[i-1]+"px",
                });
            }

            $("#box li:nth-child(1) div").css ({
                opacity:0
            });

            timer = setInterval(start,zoom.times);
            $("#box li").on("mouseover",function(){
                clearInterval(timer);
                    $(this).children("div").css({
                        opacity:0,
                    });
            });

            $("#box li").on("mouseout",function(){

                $(this).children("div").css({
                    opacity: 0.4
                });

                if($(this).css("z-index") ==10) {
                    $(this).children("div").css({
                        opacity: 0
                    });
                }

               timer = setInterval(start,zoom.times);

            });

            $(".lb-next").on("mouseleave",function(){
                clearInterval(timer);
                timer = setInterval(start,zoom.times);
            });

            $(".lb-prev").on("mouseleave",function(){
                clearInterval(timer);
                timer = setInterval(start,zoom.times);
            });
        })