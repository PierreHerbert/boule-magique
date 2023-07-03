import { StatusBar } from 'expo-status-bar';
import { StyleSheet, View, Button, Text } from 'react-native';

export default function App() {

  var RandomNumber;

  const [reponse, setReponse] = useState([]);

  useEffect(() => {
    RandomNumber = Math.floor(Math.random() * 7) + 1 ;
    getReponse();

  }, []); // Sans les crochets ça tourne en boucle

  const getReponse = async (RandomNumber) => {
    await axios.get(`http://localhost:8000/api/reponse/${RandomNumber}`).then((res) => {
      setReponse(res.data);
    });
  };
  return (
    <View style={styles.container}>

      <Text> Reponse : {reponse.libelle}</Text>
      <StatusBar style="auto" />

      <Button
        onPress={getReponse}
        title="Secouer la boule"
        color="#841584"
        accessibilityLabel="Secouer la boule"
      />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
