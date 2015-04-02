Imports System.Data.OleDb
Public Class deletepatient
    Dim con As New OleDbConnection
    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        Dim dbProvider As String
        Dim dbSource As String
        dbProvider = "PROVIDER=Microsoft.ACE.OLEDB.12.0;"
        dbSource = "Data Source=C:\Users\ADMIN\Documents\regpatient.accdb"
        Using con = New OleDb.OleDbConnection(dbProvider & dbSource)
            Using com = New OleDbCommand("delete from Table1 where [pid] =@sno", con)
                con.Open()
                com.Parameters.AddWithValue("@sno", TextBox1.Text)
                com.ExecuteNonQuery()
                MsgBox("Record Deleted")
                con.Close()
            End Using
        End Using
    End Sub

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        TextBox1.Clear()
    End Sub
End Class