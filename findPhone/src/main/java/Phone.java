import java.util.*;

public class Phone {
    public String find(String phone) {
        List <HashMap<String[],String>> letters = new ArrayList<HashMap<String[], String>>();

        String[] letters2 = new String[3];
        letters2[0] = "A";
        letters2[1] = "B";
        letters2[2] = "C";

        HashMap<String[], String> map2 = new HashMap<String[], String>();
        map2.put(letters2, "2");

        String[] letters3 = new String[3];
        letters3[0] = "D";
        letters3[1] = "E";
        letters3[2] = "F";

        HashMap<String[], String> map3 = new HashMap<String[], String>();
        map3.put(letters3, "3");

        letters.add(map2);
        letters.add(map3);

        if (phone == "1") {
            return "1";
        } else {
            return getNumber(letters, phone);
        }
    }

    public String getNumber(List<HashMap<String[], String>> letters, String letter) {
        for (Map<String[], String> map : letters) {
            for (String[] key : map.keySet()) {
                for (int i=0; i < key.length; i++) {
                    if (key[i] == letter) {
                        return map.get(key);
                    }
                }
            }
        }

        return letter;
    }

}
