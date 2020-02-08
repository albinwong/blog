    $(function(){ 
        var panelOption = {  
            maxLength: 30,  
            interval: 5,  
            level: [//仪表盘需要呈现的数据隔离区域  
                {
                    start: 0,
                    color: "#FF4500"
                },{ 
                    start: 45,
                    color: "#FFA07A"
                },{
                    start: 81, 
                    color: "#98FB98" 
                },{
                    start: 117,
                    color: "#32CD32"
                },{
                    start: 135,
                    color: "#006400"
                }
            ],  
            outsideStyle: {
                lineWidth: 0,
                color: "rgba(100,100,100,1)" 
            }  
        };  
         
        Panel = new panel("board", panelOption); 
        var fgiValue = $('#fgi').text().match(/\((.+?)\)/g)[0];
        fgiValue = fgiValue.substring(1, fgiValue.length - 1)*1.8;
        Panel.init(fgiValue);
    });

    var panel = function(id, option) {  
        this.canvas = document.getElementById(id); //获取canvas元素  
        this.cvs = this.canvas.getContext("2d"); //得到绘制上下文  
        this.width = this.canvas.width; //对象宽度  
        this.height = this.canvas.height; //对象高度  
        this.level = option.level;  
        this.outsideStyle = option.outsideStyle;  
    } 

    panel.prototype.init = function(value) {  
        var p = this;  
        var cvs = this.cvs;  
        cvs.clearRect(0, 0, this.width, this.height);  
         
        p.drawArc();  
        p.drawLevelArea(p.level);  
        p.drawLine();  
        p.drawSpanner(value);  
    }

    var panelOption = {  
        maxLength: 30,  
        interval: 5,  
        level: [//仪表盘需要呈现的数据隔离区域  
            {
                start: 0,
                color: "red"
            },{
                start: 30,
                color: "yellow"
            },{
                start: 40,
                color: "blue"
            },{
                start: 100,
                color: "Lime"
            }  
        ],  
        outsideStyle: 
        {
            lineWidth: 4,
            color: "rgba(100,100,100,1)"
        }  
    }; 

    panel.prototype.save = function(fn) {  
        this.cvs.save();  
        fn();  
        this.cvs.restore();  
    } 

    panel.prototype.drawArc = function() {  
        var p = this;  
        var cvs = this.cvs;  
        p.save(function() {  
            cvs.translate(p.width / 2, p.height); //将坐标点移到矩形的底部的中间  
            cvs.beginPath();  
            cvs.lineWidth = p.outsideStyle.lineWidth;  
            cvs.strokeStyle = p.outsideStyle.color;  
            cvs.arc(0, 0, p.height - cvs.lineWidth, 0, Math.PI / 180 * 180, true); //画半圆  
            cvs.stroke();  
        });  
    } 

    panel.prototype.drawLevelArea = function(level) {  
        var p = this;  
        var cvs = this.cvs;  
        for (var i = 0; i < level.length; i++) {  
            p.save(function() {  
                cvs.translate(p.width / 2, p.height);  
                cvs.rotate(Math.PI / 180 * level[i].start);  
                p.save(function() {  
                    cvs.beginPath();  
                    cvs.arc(0, 0, p.height - p.outsideStyle.lineWidth, Math.PI / 180 * 180, Math.PI / 180 * 360);  
                    cvs.fillStyle = level[i].color;  
                    cvs.fill();  
                });  
            });  
        }  
    } 

    panel.prototype.drawLine = function() {  
        var p = this;
        var cvs = this.cvs;  
        for (var i = 0; i <= 180; i++) {  
            p.save(function() {  
                cvs.translate(p.width / 2, p.height);  
                cvs.rotate(Math.PI / 180 * i * 1.1);  
                p.save(function() {  
                    cvs.beginPath();  
                    // cvs.lineTo(-(p.height - p.outsideStyle.lineWidth) + 10, 0);  
                    // cvs.lineTo(-(p.height - p.outsideStyle.lineWidth) + 5, 0 );  
                    cvs.stroke();

                    /*0 - 25 Extreme Fear  25% 0
                    26- 46 Fear          20% 45
                    47 - 54 Neutral      10% 81
                    55 - 75 Greed        20% 117
                    76 - 100Extreme Greed 25% 135*/
                    // var lineAreaValue = {0:"Extreme Fear",45:"Fear",81: "Neutral",117: "Greed",145: "Extreme Greed"};
                    var lineAreaValue = {15:"极度恐惧",53:"恐惧",87: "中立",110: "贪婪",139: "极度贪婪"};
                    if (lineAreaValue.hasOwnProperty(i)) {
                        p.drawText(lineAreaValue[i], i);  
                    }
                });  
            });  
        }  
    } 

    panel.prototype.drawText = function(val, i) {  
        var p = this;  
        var cvs = this.cvs;  
        p.save(function() { 
            cvs.translate(3, -5);  
            // cvs.rotate(0.1);  
            cvs.beginPath();
            cvs.lineWidth = 1;
            cvs.strokeStyle = "#FFF";
            cvs.font = '12px 宋体';
            cvs.strokeText(val, -(p.height - p.outsideStyle.lineWidth), 0);  
            cvs.fill();
        });  
    } 

    panel.prototype.drawSpanner = function(value) {  
        var p = this;  
        var cvs = this.cvs;  
        p.save(function() {  
            cvs.translate(p.width / 2, p.height);  
            cvs.moveTo(0, 0);  
            cvs.arc(0, 0, p.height / 30, 0, (Math.PI / 180) * 360);  
            cvs.lineWidth = 3;  
            cvs.stroke();
        });

        p.save(function() {  
            cvs.translate(p.width / 2, p.height);
            cvs.rotate(Math.PI / 180 * -90);
            p.save(function() {
                cvs.rotate(Math.PI / 180 * value);
                cvs.beginPath();
                cvs.moveTo(5, -3);
                cvs.lineTo(0, -p.height * 0.7);
                cvs.lineTo(-5, -3);
                cvs.lineTo(5, -3); 
                cvs.fill();
            });
        });  
    } 