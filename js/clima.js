function getClima(){
    
    $.ajax({
        method: 'get',
        crossDomain: true,
        url:'http://api.openweathermap.org/data/2.5/weather?id=3468879&appid=47779e433947986ff64faaf4eae825eb',
        dataType: 'json',
        success: function (data){

            descricao = traduzirDescricao(data.weather[0].description);
            $('#situacao').html(descricao);
            
            temperatura = data.main.temp - 273;
            var tempFormatadada=temperatura.toFixed(2).split('.');
            $('#temperatura').html(tempFormatadada+"°");
            
            $('#pressao').html(data.main.pressure);
            
            $('#umidade').html(data.main.humidity);
            
            $('#velocidadevento').html(data.wind.speed);
            
            $('#tempminima').html(data.main.temp_min);
            
            $('#tempmaxima').html(data.main.temp_max);
            
            var dataAmanhecer = new Date(data.sys.sunrise*1000);
            var descDataAmanhecer =
                    dataAmanhecer.getHours()+':'+dataAmanhecer.getMinutes();
            $('#nascerdosol').html(descDataAmanhecer);
            
            var dataAnoitecer = new Date(data.sys.sunset*1000);
            var descDataAnoitecer =
                    dataAnoitecer.getHours()+':'+dataAnoitecer.getMinutes();
            $('#pordosol').html(descDataAnoitecer);
            
            var icone = data.weather[0].icon;
            var caminhoIcone = 'img/icones/'+icone+'.png';
            $('#icone').attr('src', caminhoIcone);
            
        },
        error:function (argument){
            alert('falha ao obter dados!');
        }
    });

}

function traduzirDescricao(descricao){
    descricaoTraduzida = "";
    
    if(descricao == "clear sky"){
        descricaoTraduzida = "Céu limpo";
    }else if(descricao == "few clouds")
    {
        descricaoTraduzida = "Poucas nuvens";
    }else if(descricao == "scattered cloudss")
    {
        descricaoTraduzida = "Poucas nuvens";
    }else if(descricao == "broken clouds")
    {
        descricaoTraduzida = "nuvens quebradas";
    }else if(descricao == "shower rain")
    {
        descricaoTraduzida = "chuva de banho";
    }else if(descricao == "rain")
    {
        descricaoTraduzida = "chuva";
    }else if(descricao == "thunderstorm")
    {
        descricaoTraduzida = "trovoada";
    }else if(descricao == "mist")
    {
        descricaoTraduzida = "névoa";
    }

    return descricaoTraduzida;
    
}

window.onload = function (){
    getClima();
};