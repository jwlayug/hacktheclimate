(function(){
  var data = 
   [
    {name: "Arduino Uno",  imgs:"images/uno.jpg",  info: "The Arduino Uno is a microcontroller board based on the ATmega328 (datasheet). It has 14 digital input/output pins (of which 6 can be used as PWM outputs), 6 analog inputs, a 16 MHz ceramic resonator, a USB connection, a power jack, an ICSP header, and a reset button.", modalName: "modal1"},
    {name: "Raspberry Pi", imgs:"images/rpi.jpg",  info: "The Raspberry Pi is a credit-card sized computer that plugs into your TV and a keyboard. It is a capable little computer which can be used in electronics projects, and for many of the things that your desktop PC does, like spreadsheets, word-processing and games. It also plays high-definition video. We want to see it being used by kids all over the world to learn programming.", modalName: "modal2"},
    {name: "Soil Moisture Sensor",  imgs:"images/soil.jpg",  info: "The Soil Moisture Sensor uses capacitance to measure the water content of soil (by measuring the dielectric permittivity of the soil, which is a function of the water content). Simply insert this rugged sensor into the soil to be tested, and the volumetric water content of the soil is reported in percent.", modalName: "modal3"},
    {name: "Temp and Humidity Sensor",  imgs:"images/dht.jpg",  info: "The DHT11 is a basic, ultra low-cost digital temperature and humidity sensor. It uses a capacitive humidity sensor and a thermistor to measure the surrounding air, and spits out a digital signal on the data pin (no analog input pins needed). Its fairly simple to use, but requires careful timing to grab data. The only real downside of this sensor is you can only get new data from it once every 2 seconds, so when using our library, sensor readings can be up to 2 seconds old.", modalName: "modal4"},
    {name: "Water Flow Sensor",  imgs:"images/flow.jpg",  info: "Water flow sensor consists of a plastic valve body, a water rotor, and a hall-effect sensor. When water flows through the rotor, rotor rolls. Its speed changes with different rate of flow. The hall-effect sensor outputs the corresponding pulse signal. This one is suitable to detect flow in water dispenser or coffee machine.", modalName: "modal5"},
    {name: "Solenoid Valve",  imgs:"images/solenoid.jpg",  info: "A solenoid valve is an electromechanically operated valve. The valve is controlled by an electric current through a solenoid: in the case of a two-port valve the flow is switched on or off; in the case of a three-port valve, the outflow is switched between the two outlet ports. Multiple solenoid valves can be placed together on a manifold.", modalName: "modal6"}
 ];

  var app = angular.module('hack', []);
  app.controller('HackController', function(){
  	this.datas = data;
  });

})();