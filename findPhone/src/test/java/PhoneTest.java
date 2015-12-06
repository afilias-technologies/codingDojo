import org.junit.Test;

import static org.junit.Assert.assertEquals;

public class PhoneTest {

    private Phone phone;

    public PhoneTest(){
        this.phone = new Phone();
    }

    @Test
    public void it_should_return_1_for_1() {
        assertEquals("1", phone.find("1"));
    }

    @Test
    public void it_should_return_2_for_ABC() {
        assertEquals("2", phone.find("A"));
        assertEquals("2", phone.find("B"));
        assertEquals("2", phone.find("C"));
    }

    @Test
    public void it_should_return_3_for_DEF() {
        assertEquals("3", phone.find("D"));
        assertEquals("3", phone.find("E"));
        assertEquals("3", phone.find("F"));
    }


}
