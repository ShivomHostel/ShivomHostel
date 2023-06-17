// JavaScript Document
var weather;
function setup()
{
	create canvas(400,200);
	loadJSON('http://samples.openweathermap.org/data/2.5/find?q=London&units=metric&appid=b1b15e88fa797225412429c1c50c122a1');
}
function gotData(data)
{
	weather=data;
}
function draw()
{
	background(0);
	if(weather)
	{
		ellipse(100,100 weather.main.temp, weather.main.temp);
			ellipse(300,100 weather.main.humidity, weather.main.humidity);
	}