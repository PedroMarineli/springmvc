package springmvc.controllers;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class HomeController {
    @RequestMapping("/")
    public String index() {
        return "index.jsp";
    }

    @RequestMapping("/tabuada")
    public tabuada() {
        int[] resultado = new int[10];
        for(int pos = 0;pos < 10;pos++) {
            resultado[pos] = (pos + 1) * 2;
        }
        model.addAtribute("resultado", resultado)
        return "tabuada.jsp";
    }
}