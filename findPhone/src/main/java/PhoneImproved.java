import java.util.HashMap;

public class PhoneImproved {
    public String find(String phone) {
        HashMap<String,String> letters = new HashMap<String, String>();
        letters.put("A", "2");
        letters.put("B", "2");
        letters.put("C", "2");
        letters.put("D", "3");
        letters.put("E", "3");
        letters.put("F", "3");
        letters.put("G", "4");
        letters.put("H", "4");
        letters.put("I", "4");

        return letters.get(phone) == null ? phone : letters.get(phone);
    }

}
