Module Module1
    Sub checkbutton(ByRef but1 As Button, ByRef but2 As Button)
        If but2.Text = "" Then
            but2.Text = but1.Text
            but1.Text = ""
        End If
    End Sub
    Sub checkk()
        If Shuffle.Button1.Text = "1" And Shuffle.Button2.Text = "2" And Shuffle.Button3.Text = "3" And Shuffle.Button4.Text = "4" And Shuffle.Button5.Text = "5" And Shuffle.Button6.Text = "6" And Shuffle.Button7.Text = "7" And Shuffle.Button8.Text = "8" And Shuffle.Button9.Text = "9" And Shuffle.Button10.Text = "10" And Shuffle.Button11.Text = "11" And Shuffle.Button12.Text = "12" And Shuffle.Button13.Text = "13" And Shuffle.Button14.Text = "14" And Shuffle.Button15.Text = "15" Then
            MsgBox("You ordered the numbers correctly, Congradulations")
        End If
    End Sub
    Sub shufflee()
        Dim a(15), i, j, rn As Integer
        Dim flag As Boolean
        flag = False
        i = 1
        a(j) = 1
        Do While i <= 15
            Randomize()
            rn = CInt(Int((15 * Rnd()) + 1))
            For j = 1 To i
                If (a(j) = rn) Then
                    flag = True
                    Exit For
                End If
            Next
            If flag = True Then
                flag = False
            Else
                a(i) = rn
                i = i + 1

            End If
        Loop
        Shuffle.Button1.Text = a(1)
        Shuffle.Button2.Text = a(2)
        Shuffle.Button3.Text = a(3)
        Shuffle.Button4.Text = a(4)
        Shuffle.Button5.Text = a(5)
        Shuffle.Button6.Text = a(6)
        Shuffle.Button7.Text = a(7)
        Shuffle.Button8.Text = a(8)
        Shuffle.Button9.Text = a(9)
        Shuffle.Button10.Text = a(10)
        Shuffle.Button11.Text = a(11)
        Shuffle.Button12.Text = a(12)
        Shuffle.Button13.Text = a(13)
        Shuffle.Button14.Text = a(14)
        Shuffle.Button15.Text = a(15)
        Shuffle.Button16.Text = ""
    End Sub
End Module
