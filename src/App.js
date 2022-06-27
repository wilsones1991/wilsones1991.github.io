import { useState, useEffect } from 'react'
import './App.css';

const BANKS = [
  {bank: 1,
  audio: [
    {
      id: "Q",
      src: "./audio/Kick 1.wav",
      description: "Kick 1"
    },
    {
      id: "W",
      src: "./audio/Kick 2.wav",
      description: "Kick 2"
    },
    {
      id: "E",
      src: "./audio/Snare 3.wav",
      description: "Snare 1"
    },
    {
      id: "A",
      src: "./audio/Snare 4.wav",
      description: "Snare 2"
    },
    {
      id: "S",
      src: "./audio/Clap 5.wav",
      description: "Clap 1"
    },
    {
      id: "D",
      src: "./audio/Clap 6.wav",
      description: "Clap 2"
    },
    {
      id: "Z",
      src: "./audio/Hihat 7.wav",
      description: "Hihat 1"
    },
    {
      id: "X",
      src: "./audio/Hihat 8.wav",
      description: "Hihat 2"
    },
    {
      id: "C",
      src: "./audio/Crash 9.wav",
      description: "Crash"
    }
  ]},
  {bank: 2,
  audio: [
    {
      id: "Q",
      src: "./audio/Vocal Hit 10.wav",
      description: "Vocal Hit 1"
    },
    {
      id: "W",
      src: "./audio/Vocal Hit 11.wav",
      description: "Vocal Hit 2"
    },
    {
      id: "E",
      src: "./audio/Vocal Hit 12.wav",
      description: "Vocal Hit 3"
    },
    {
      id: "A",
      src: "./audio/Vocal Hit 18.wav",
      description: "Vocal Hit 4"
    },
    {
      id: "S",
      src: "./audio/Vocal Hit 14.wav",
      description: "Vocal Hit 5"
    },
    {
      id: "D",
      src: "./audio/Vocal Hit 15.wav",
      description: "Vocal Hit 6"
    },
    {
      id: "Z",
      src: "./audio/Vocal Hit 16.wav",
      description: "Vocal Hit 7"
    },
    {
      id: "X",
      src: "./audio/Vocal Hit 17.wav",
      description: "Vocal Hit 8"
    },
    {
      id: "C",
      src: "./audio/Reverse Vocal 13.wav",
      description: "Reverse Vocal"
    }
  ]}
]

function App() {
  
// Database of sound samples

  const [power, togglePower] = useState(true)
  const [display, setDisplay] = useState(null)
  const [volume, setVolume] = useState(.5)
  const [bank, setBank] = useState(BANKS[0])
  
  useEffect(() => {
    document.addEventListener("keydown", keyboardPlaySample)
    
    return () => {
      document.removeEventListener("keydown", keyboardPlaySample)
    }
  })

  // Helper functions
  const findLetter = (letter) => {
    return bank.audio.some((entry) => (entry.id === letter))
  }

  const keyboardPlaySample = (key) => {

    if (findLetter(key.key.toUpperCase())) {
      playSample(key.key.toUpperCase())
    }
  }

  const playSample = (key) => {
    const audio = document.getElementById(key)

    if (power) {
      audio.load()
      audio.volume = volume
      audio.play()
      setDisplay(bank.audio.find((sample) => (sample.id === key)).description)
    }
  }

  return (

    <div id="drum-machine" className = "drum-machine" onKeyDown={(key)=>keyboardPlaySample(key)}>
      <DrumPad playSample={playSample} power={power} bank={bank} />
      <ControlPanel power={power} togglePower={togglePower} display={display} setVolume={setVolume} bank={bank} setBank={setBank} />
    </div>
  );
}

function DrumPad(props) {

  // Helper functions
  const findSample = (id) => {
    return props.bank.audio.find((sample) => (sample.id === id)).src
  }


  return (
    <div id="drum-pad-container" className="drum-pad-container">
      <div id="drum-pad" className="drum-pad" onClick={()=>props.playSample("Q")}>
        <span>Q</span>
        <audio id="Q" className="clip" src={findSample("Q")}></audio>
      </div>
      <div id="drum-pad" className="drum-pad" onClick={()=>props.playSample("W")}>
        <span>W</span>
        <audio id="W" className="clip" src={findSample("W")}></audio>
      </div>
      <div id="drum-pad" className="drum-pad" onClick={()=>props.playSample("E")}>
        <span>E</span>
        <audio id="E" className="clip" src={findSample("E")}></audio>
      </div>
      <div id="drum-pad" className="drum-pad" onClick={()=>props.playSample("A")}>
        <span>A</span>
        <audio id="A" className="clip" src={findSample("A")}></audio>
      </div>
      <div id="drum-pad" className="drum-pad" onClick={()=>props.playSample("S")}>
        <span>S</span>
        <audio id="S" className="clip" src={findSample("S")}></audio>
      </div>
      <div id="drum-pad" className="drum-pad" onClick={()=>props.playSample("D")}>
        <span>D</span>
        <audio id="D" className="clip" src={findSample("D")}></audio>
      </div>
      <div id="drum-pad" className="drum-pad" onClick={()=>props.playSample("Z")}>
        <span>Z</span>
        <audio id="Z" className="clip" src={findSample("Z")}></audio>
      </div>
      <div id="drum-pad" className="drum-pad" onClick={()=>props.playSample("X")}>
        <span>X</span>
        <audio id="X" className="clip" src={findSample("X")}></audio>
      </div>
      <div id="drum-pad" className="drum-pad" onClick={()=>props.playSample("C")}>
        <span>C</span>
        <audio id="C" className="clip" src={findSample("C")}></audio>
      </div>
    </div>
  )
}

function ControlPanel(props) {
  
  // Helper functions
  const sliderPosition = (sliderState) => {
    if (sliderState === true || sliderState.bank === 2) {
      return "20px"
    } else {
      return "0"
    }
  }

  const renderVolumeSlider = () => {
    if (!iOS()) {
      return <input type="range" min="0" max="100" onChange={(event) => {props.setVolume((event.target.value)/100)}} />
    }
  }

  const iOS = () => {
    return [
      'iPad Simulator',
      'iPhone Simulator',
      'iPod Simulator',
      'iPad',
      'iPhone',
      'iPod'
    ].includes(navigator.platform)
    // iPad on iOS 13 detection
    || (navigator.userAgent.includes("Mac") && "ontouchend" in document)
  }

  return (
    <div id="control-panel" className="control-panel">
      <Power power={props.power} sliderPosition={sliderPosition} togglePower={props.togglePower}/>
      <div id="display" className="display">{props.display}</div>
      {renderVolumeSlider()}
      <Bank bank={props.bank} setBank={props.setBank} sliderPosition={sliderPosition} />
    </div>
  )
}

function Power(props) {
  
  return (
    <div className="toggle-container">
      <div>Power</div>
      <div className="toggle-slider">
        <div className="toggle-button power-button" style={{transform: "translateX(" + props.sliderPosition(props.power) + ")"}} onClick={()=>props.togglePower(!props.power)}></div>
      </div>
    </div>
  )
}

function Bank(props) {
  
  const handleClick = (bank) => {
    if (bank.bank === 1) {
      return BANKS[1]
    } else {
      return BANKS[0]
    }
  }

  return (
    
    <div className="toggle-container">
      <div>Bank</div>
      <div className="toggle-slider">
        <div className="toggle-button" style={{transform: "translateX(" + props.sliderPosition(props.bank) + ")"}} onClick={()=>props.setBank(handleClick(props.bank))} onTouchEnd={()=>props.setBank(handleClick(props.bank))}></div>
      </div>
    </div>
    
  )
  
}

export default App;
