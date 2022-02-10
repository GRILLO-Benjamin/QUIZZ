class Players{
    constructor(pin){
        this.pin = pin;
        this.players = [];
        this.playerCounter = 1;
    }

    addPlayer(pseudo){
        let player = {
            id: this.playerCounter++,
            pseudo: pseudo,
            score: []
        }
        return this.players.push(player)
    }

    totalScore(user_id){
        return this.score.reduce((a,b)=>a+b);
    }

    currentQuestionScore(user_id){
        this.players.indexOf({id:player})
        return this.score[this.score.length-1]
    }
    
}