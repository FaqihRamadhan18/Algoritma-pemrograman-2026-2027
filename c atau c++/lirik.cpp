#include <iostream>
#include <thread>
#include <chrono>
#include <vector>

void animate_text(const std::string& text, double delay, const std::string& color) {
    std::cout << color; //set warna
    for (char c : text) {
        std::cout << c << std::flush;
        std::this_thread::sleep_for(std::chrono::duration<double>(delay));
    }
    std::cout << "\033[on" << std::endl; //reset warna
}